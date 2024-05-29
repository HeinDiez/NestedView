import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static values = {
        categories: String
    }

    connect() {
        const categories = JSON.parse(this.categoriesValue)

        const renderCategories = (categories, parentElement, level = 0) => {
            categories.forEach(category => {
                const categoryElement = document.createElement('div');
                categoryElement.classList.add('category', 'mb-2', 'p-2', 'rounded');
                categoryElement.style.marginLeft = `${level * 20}px`;
                categoryElement.textContent = category.name;

                if (category.subcategories.length > 0) {
                    const expandButton = document.createElement('span');
                    expandButton.textContent = ' +';
                    expandButton.classList.add('ml-1', 'text-gray-500', 'cursor-pointer');
                    categoryElement.appendChild(expandButton);

                    const subcategoryContainer = document.createElement('div');
                    subcategoryContainer.classList.add('subcategory', 'ml-1');
                    subcategoryContainer.style.display = 'none';

                    expandButton.addEventListener('click', (event) => {
                        event.stopPropagation();
                        const isExpanded = subcategoryContainer.style.display === 'block';
                        subcategoryContainer.style.display = isExpanded ? 'none' : 'block';
                        expandButton.textContent = isExpanded ? ' +' : ' -';
                    });

                    renderCategories(category.subcategories, subcategoryContainer, level + 1);
                    categoryElement.appendChild(subcategoryContainer);
                }

                parentElement.appendChild(categoryElement);
            });
        };

        renderCategories(categories, this.element);
    }
}
