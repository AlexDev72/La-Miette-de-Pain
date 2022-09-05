import '../css/app.scss';

import{Dropdown} from "bootstrap";

document.addEventListener('DOMcontentLoaded', () => {
    enableDropdowns();
});

const enableDropdowns = () => {
    const dropdownElementList = document.querySelectorAll('.dropdown-toggle')
    dropdownList = [...dropdownElementList].map(dropdownToggleEl => new Dropdown(dropdownToggleEl))

}