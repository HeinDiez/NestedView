import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ['link']
    static values = {
        expanded: Boolean,
        identifier: String
    }

    toggle(event) {
        this.expandedValue = !this.expandedValue;
        this.updateLink();
        this.updateFrame();
    }

    updateLink() {
        const href = new URL(this.element.href);
        href.searchParams.set('expand', this.expandedValue);
        this.element.href = href.toString();
    }

    updateFrame() {
        const frame = document.getElementById(`expand-message-${this.identifierValue}`);
        if (this.expandedValue) {
            frame.classList.add('expanded');
            return
        }

        frame.classList.remove('expanded');
    }
}
