import { Controller } from '@hotwired/stimulus';

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

        const iconElement = this.createIconElement(category.type);
        categoryElement.appendChild(iconElement);
        const nameElement = document.createElement('span');
        nameElement.textContent = category.name;
        // categoryElement.textContent = category.name;
        categoryElement.appendChild(nameElement);

        categoryElement.addEventListener('click', (event) => {
            this.highlightCategory(event, categoryElement);
            this.displayCategoryContent(category);

        });

        return categoryElement;
    }


    createIconElement(type) {
        const icon = document.createElement('span');
        icon.classList.add('icon');
        let svgContent;
        switch (type) {
            case 'folder':
                svgContent = `
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                        <path d="M10 4H2C0.9 4 0 4.9 0 6v12c0 1.1 0.9 2 2 2h20c1.1 0 2-0.9 2-2V8c0-1.1-0.9-2-2-2h-8l-2-2H10z" />
                    </svg>`;
                break;
            case 'image':
                svgContent = `
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                        <path d="M19 3H5c-1.1 0-2 0.9-2 2v14c0 1.1 0.9 2 2 2h14c1.1 0 2-0.9 2-2V5c0-1.1-0.9-2-2-2zm0 16H5V5h14v14zm-3-5.5l-2.5-3.01L11 16h6z" />
                    </svg>`;
                break;
            case 'text':
                svgContent = `
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-0.49-7-3.85-7-7.93s3.05-7.44 7-7.93V15h4.93C15.44 17.95 13.31 19.92 11 19.93zm6.62-4.65L13 14.4V7.07c2.93 0.65 5.36 3.08 5.93 6.01-0.66 0.43-1.38 0.77-2.12 1.2z" />
                    </svg>`;
                break;
            default:
                svgContent = '';
        }
        icon.innerHTML = svgContent;
        return icon;
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




    displayCategoryContent(category) {
        this.contentDisplay.innerHTML = ''; // Clear previous content
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
            listItem.textContent = subcategory.name;
            subcategoriesList.appendChild(listItem);
        });
        this.contentDisplay.appendChild(title);
        this.contentDisplay.appendChild(subcategoriesList);
    }
    renderImageContent(category) {
        const img = document.createElement('img');
        img.src = category.imageUrl;
        img.alt = category.name;
        img.style.width = '100%'; // Adjust size as needed
        this.contentDisplay.appendChild(img);
    }
    renderTextContent(category) {
        const text = document.createElement('p');
        text.textContent = category.name;
        this.contentDisplay.appendChild(text);
    }
}
