import { Controller } from '@hotwired/stimulus';
import { FolderIcon, ImageIcon, TextIcon } from 'icons'

export default class extends Controller {
    static values = {
        categories: String
    }

    connect() {
        const categories = JSON.parse(this.categoriesValue);
        this.renderCategories(categories, this.element);
        this.contentDisplay = document.getElementById('content-display');

    }

    renderCategories(categories, parentElement, level = 0) {
        categories.forEach(category => {
            const {categoryElement, categoryLabelElement} = this.createCategoryElement(category, level);
            parentElement.appendChild(categoryElement);

            if (category.subcategories.length > 0) {
                const { expandButton, subcategoryContainer } = this.createExpandableSection(categoryElement, categoryLabelElement);
                this.renderCategories(category.subcategories, subcategoryContainer, level + 1);
            }
        });
    }

    createCategoryElement(category, level) {
        const categoryElement = document.createElement('div');
        categoryElement.classList.add('category', 'p-2', 'ml-1', 'cursor-pointer', level !== 0 && 'border-l-[1px]', level !== 0 && 'border-l-pale-pink');

        const categoryLabelElement = document.createElement('div');
        categoryLabelElement.classList.add('flex', 'gap-2', 'items-center', 'hover:text-warm-orange');


        const iconElement = this.createIconElement(category.type);
        categoryLabelElement.appendChild(iconElement);
        const nameElement = document.createElement('span');
        nameElement.textContent = category.name;
        categoryLabelElement.appendChild(nameElement);

        categoryElement.appendChild(categoryLabelElement);

        categoryElement.addEventListener('click', (event) => {
            this.highlightCategory(event, categoryElement);
            this.displayCategoryContent(category);
        });

        return {categoryElement, categoryLabelElement};
    }

    createExpandableSection(categoryElement, categoryLabelElement) {
        const expandButton = document.createElement('span');
        expandButton.textContent = '+';
        expandButton.classList.add('ml-1', 'cursor-pointer');
        categoryLabelElement.appendChild(expandButton);

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
        expandButton.textContent = '-';
    }

    collapseSubcategories(subcategoryContainer, expandButton) {
        subcategoryContainer.style.height = `${subcategoryContainer.scrollHeight}px`;
        setTimeout(() => {
            subcategoryContainer.style.height = '0';
            subcategoryContainer.classList.remove('expanded');
            expandButton.textContent = '+';
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

    displayCategoryContent(category) {
        this.contentDisplay.innerHTML = '';
        switch (category.type) {
            case 'folder':
                this.renderFolderContent(category);
                break;
            case 'image':
                this.renderImageContent(category);
                break;
            case 'text':
                this.renderTextContent(category);
                break;
            default:
                this.renderTextContent(category);
        }
    }
    renderFolderContent(category) {
        const title = document.createElement('h3');
        title.textContent = category.name;
        const subcategoriesList = document.createElement('ul');
        category.subcategories.forEach(subcategory => {
            const listItem = document.createElement('li');
            listItem.classList.add('flex', 'gap-2', 'items-center',);

            const iconElement = this.createIconElement(subcategory.type)
            listItem.textContent = subcategory.name;
            listItem.appendChild(iconElement)

            subcategoriesList.appendChild(listItem);
        });
        this.contentDisplay.appendChild(subcategoriesList);
    }
    renderImageContent(category) {
        const img = document.createElement('img');
        img.src = category.imageUrl;
        img.alt = category.name;
        img.style.width = '100%';
        this.contentDisplay.appendChild(img);
    }
    renderTextContent(category) {
        const text = document.createElement('p');
        text.textContent = category.content ?? category.name;
        this.contentDisplay.appendChild(text);
    }

    createIconElement(type) {
        const icon = document.createElement('span');
        icon.classList.add('icon');
        let svgContent;
        switch (type) {
            case 'folder':
                svgContent = FolderIcon();
                break;
            case 'image':
                svgContent = ImageIcon();
                break;
            case 'text':
                svgContent = TextIcon();
                break;
            default:
                svgContent = '';
        }
        icon.innerHTML = svgContent;
        return icon;
    }
}
