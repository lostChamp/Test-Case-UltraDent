const plus = document.querySelector(".add-row_btn");

plus.addEventListener("click", () => {
    let table = document.querySelector(".order__form-table")
    let tbody = table.querySelector("tbody");
    let countTr = tbody.querySelectorAll("tr").length;
    tbody.innerHTML += `
        <tr class="work__types">
            <td><input type="text" name="table[]" value=""></td>
            <td><input type="number" name="table[]" value=""></td>
            <td><input type="date" name="table[]" value=""></td>
            <td><input type="text" name="table[]" value="" placeholder="чч:мм"></td>
        </tr>
    `;

});