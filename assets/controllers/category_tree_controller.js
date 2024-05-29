import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static values = {
        categories: String
    }

    connect() {
        const categories = JSON.parse(this.categoriesValue);
        this.renderCategories(categories, this.element);
    }

    renderCategories(categories, parentElement, level = 0) {
        categories.forEach(category => {
            const categoryElement = this.createCategoryElement(category, level);
            parentElement.appendChild(categoryElement);

            if (category.subcategories.length > 0) {
                const { expandButton, subcategoryContainer } = this.createExpandableSection(categoryElement);
                this.renderCategories(category.subcategories, subcategoryContainer, level + 1);
            }
        });
    }

    createCategoryElement(category, level) {
        const categoryElement = document.createElement('div');
        categoryElement.classList.add('category', 'mb-2', 'p-2', 'border-l-[1px]', 'border-l-warm-orange');
        categoryElement.style.marginLeft = `20px`;

        switch (category.type) {
            case 'folder':
                categoryElement.textContent = category.name;
                categoryElement.textContent = category.name;
                break;
            case 'image':
                const img = document.createElement('img');
                img.src = category.imageUrl;
                img.alt = category.name;
                img.style.width = '50px'; // Adjust size as needed
                categoryElement.appendChild(img);
                break;
            case 'text':
                categoryElement.textContent = category.name;
                break;
            default:
                categoryElement.textContent = category.name;
        }

        categoryElement.addEventListener('click', (event) => {
            this.highlightCategory(event, categoryElement);
        });

        return categoryElement;
    }

    createExpandableSection(categoryElement) {
        const expandButton = document.createElement('span');
        expandButton.textContent = ' +';
        expandButton.classList.add('ml-1', 'text-dark-gray', 'cursor-pointer');
        categoryElement.appendChild(expandButton);

        const subcategoryContainer = document.createElement('div');
        subcategoryContainer.classList.add('subcategory', 'ml-1');
        subcategoryContainer.style.display = 'none';
        categoryElement.appendChild(subcategoryContainer);

        expandButton.addEventListener('click', (event) => {
            this.toggleSubcategories(event, subcategoryContainer, expandButton);
        });

        return { expandButton, subcategoryContainer };
    }

    toggleSubcategories(event, subcategoryContainer, expandButton) {
        event.stopPropagation();
        const isExpanded = subcategoryContainer.classList.contains('expanded');
        if (isExpanded) {
            this.collapseSubcategories(subcategoryContainer, expandButton);
        } else {
            this.expandSubcategories(subcategoryContainer, expandButton);
        }

        subcategoryContainer.addEventListener('transitionend', () => {
            this.onTransitionEnd(subcategoryContainer, isExpanded);
        }, { once: true });
    }

    expandSubcategories(subcategoryContainer, expandButton) {
        subcategoryContainer.style.display = 'block';
        subcategoryContainer.classList.add('expanded');
        const height = this.calculateHeight(subcategoryContainer);
        subcategoryContainer.style.height = '0';
        setTimeout(() => {
            subcategoryContainer.style.height = height;
        }, 0);
        expandButton.textContent = ' -';
    }

    collapseSubcategories(subcategoryContainer, expandButton) {
        subcategoryContainer.style.height = `${subcategoryContainer.scrollHeight}px`;
        setTimeout(() => {
            subcategoryContainer.style.height = '0';
            subcategoryContainer.classList.remove('expanded');
            expandButton.textContent = ' +';
        }, 0);
    }

    calculateHeight(element) {
        element.style.height = 'auto';
        const height = `${element.scrollHeight}px`;
        element.style.height = '0';
        return height;
    }

    onTransitionEnd(subcategoryContainer, isExpanded) {
        if (isExpanded) {
            subcategoryContainer.style.display = 'none';
        } else {
            subcategoryContainer.style.height = 'auto';
        }
    }

    highlightCategory(event, categoryElement) {
        event.stopPropagation();
        this.clearPreviousHighlights();
        categoryElement.classList.add('highlighted');
    }

    clearPreviousHighlights() {
        const previouslyHighlighted = this.element.querySelector('.highlighted');
        if (previouslyHighlighted) {
            previouslyHighlighted.classList.remove('highlighted');
        }
    }
}
