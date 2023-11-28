const plus = document.querySelector(".add-row_btn");

plus.addEventListener("click", () => {
    let table = document.querySelector(".order__form-table")
    let tbody = table.querySelector("tbody");
    let countTr = tbody.querySelectorAll("tr").length;
    console.log(countTr);
    tbody.innerHTML += `
        <tr class="work__types">
            <td><input type="text" name="table_type_${countTr}" value=""></td>
            <td><input type="number" name="table_num_${countTr}" value=""></td>
            <td><input type="date" name="table_date_${countTr}" value=""></td>
            <td><input type="text" name="table_time_${countTr}" value="" placeholder="чч:мм"></td>
        </tr>
    `;
    tbody.innerHTML += tr;

});