import './bootstrap.js';
import { shouldPerformTransition, performTransition } from "turbo-view-transitions";
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');
let skipNextRenderTransition = false;
document.addEventListener("turbo:before-render", (event) => {
    if (shouldPerformTransition() && !skipNextRenderTransition) {
        event.preventDefault();

        performTransition(document.body, event.detail.newBody, async () => {
            await event.detail.resume();
        });
    }
});

document.addEventListener("turbo:before-frame-render", (event) => {
    if (shouldPerformTransition()) {
        event.preventDefault();

        skipNextRenderTransition = true;
        setTimeout(() => {
            skipNextRenderTransition = false;
        }, 100);

        performTransition(event.target, event.detail.newFrame, async () => {
            await event.detail.resume();
        });
    }
});

document.addEventListener("turbo:load", () => {
    // View Transitions don't play nicely with Turbo cache
    if (shouldPerformTransition()) Turbo.cache.exemptPageFromCache();
});