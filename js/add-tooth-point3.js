
let toothCheckbox = document.querySelector(".tooth-checkboxes");
let teeth = "";

for(let i = 1; i <= 32; i++) {
    if(i === 16 || i === 32) {
        teeth += `
        <div class="tooth">
            <input type="checkbox" value="${i}" id="tooth-${i}" name="tooth" class="tooth__checkbox">
            <label for="tooth-${i}" class="tooth__mark"></label>
        </div>
    `
    }else {
        teeth += `
        <div class="tooth">
            <input type="checkbox" value="${i}" id="tooth-${i}" name="tooth" class="tooth__checkbox">
            <label for="tooth-${i}" class="tooth__mark"></label>
            <input type="checkbox" value="${i}-${i + 1}" id="tooth-link-${i}" name="tooth-link" class="tooth__checkbox">
            <label for="tooth-link-${i}" class="tooth-link__mark"></label>
        </div>
    `
    }

}

toothCheckbox.innerHTML = teeth;



