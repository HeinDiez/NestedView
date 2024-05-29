import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    connect() {
        const categories = JSON.parse(this.element.dataset.categories);

        const renderCategories = (categories, parentElement) => {
            categories.forEach(category => {
                const categoryElement = document.createElement('div');
                categoryElement.classList.add('category');
                categoryElement.textContent = category.name;

                if (category.subcategories.length > 0) {
                    const expandButton = document.createElement('span');
                    expandButton.textContent = ' +';
                    categoryElement.appendChild(expandButton);

                    const subcategoryContainer = document.createElement('div');
                    subcategoryContainer.classList.add('subcategory');
                    subcategoryContainer.style.display = 'none';

                    expandButton.addEventListener('click', () => {
                        const isExpanded = subcategoryContainer.style.display === 'block';
                        subcategoryContainer.style.display = isExpanded ? 'none' : 'block';
                        expandButton.textContent = isExpanded ? ' +' : ' -';
                    });

                    renderCategories(category.subcategories, subcategoryContainer);
                    categoryElement.appendChild(subcategoryContainer);
                }

                parentElement.appendChild(categoryElement);
            });
        };

        renderCategories(categories, this.element);
    }
}
