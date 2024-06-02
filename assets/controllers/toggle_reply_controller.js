import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = [ "link" ];

    toggle(event) {

        const link = this.linkTarget;
        const isShowing = link.textContent.trim() === "Hide Reply";

        if (isShowing) {
            link.textContent = "Show Reply";
            link.href = link.dataset.showHref;
        } else {
            link.textContent = "Hide Reply";
            link.href = link.dataset.hideHref;
        }
    }
}
