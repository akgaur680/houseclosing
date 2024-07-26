document.getElementById('purchasePrice').addEventListener('input', formatAndCalculate);
document.getElementById('location').addEventListener('change', calculateTaxes);
document.getElementById('firstTimeBuyer').addEventListener('change', calculateTaxes);
document.addEventListener("DOMContentLoaded", function () {
    fetch('tax.json')
        .then(response => response.json())
        .then(data => {

            for (i = 0; i < data.length; i++) {

                // Create HTML elements to display the JSON data

                const optionElement = document.createElement("option");
                optionElement.text =` ${data[i].name}, ${data[i].province.code}`;
                optionElement.value = data[i].name
                console.log(optionElement)


                const ageElement = document.createElement("p");
                ageElement.textContent = "City Code: " + data[i].province.code;



                const selectTag = document.getElementById('location')
                selectTag.appendChild(optionElement)
                    ;
            }
        })
        .catch(error => console.error("Error fetching JSON data:", error));
});
function formatAndCalculate(e) {
    const value = e.target.value.replace(/[\$,]/g, '');
    if (value) {
        e.target.value = `$${numberWithCommas(value)}`;
    }
    calculateTaxes();
}

function calculateTaxes() {
    const purchasePrice = parseFloat(document.getElementById('purchasePrice').value.replace(/[\$,]/g, ''));
    if (isNaN(purchasePrice)) return;

    const location = document.getElementById('location').value;
    const firstTimeBuyer = document.getElementById('firstTimeBuyer').checked;

    const provincialTax = calculateProvincialTax(purchasePrice);
    const municipalTax = location === 'Toronto' ? calculateMunicipalTax(purchasePrice) : 0;
    const rebate = firstTimeBuyer ? calculateRebate(provincialTax, municipalTax) : 0;

    const totalTax = provincialTax + municipalTax - rebate;

    document.getElementById('provincialTax').innerText = `$${numberWithCommas(Math.round(provincialTax))}`;
    document.getElementById('municipalTax').innerText = `$${numberWithCommas(Math.round(municipalTax))}`;
    document.getElementById('rebate').innerText = `$${numberWithCommas(Math.round(rebate))}`;
    document.getElementById('totalTax').innerText = `$${numberWithCommas(Math.round(totalTax))}`;
}

function calculateProvincialTax(price) {
    let tax = 0;
    if (price > 2000000) {
        tax += (price - 2000000) * 0.025;
        price = 2000000;
    }
    if (price > 400000) {
        tax += (price - 400000) * 0.02;
        price = 400000;
    }
    if (price > 250000) {
        tax += (price - 250000) * 0.015;
        price = 250000;
    }
    if (price > 55000) {
        tax += (price - 55000) * 0.01;
        price = 55000;
    }
    tax += price * 0.005;
    return tax;
}

function calculateMunicipalTax(price) {
    let tax = 0;
    if (price > 20000000) {
        tax += (price - 20000000) * 0.075;
        price = 20000000;
    }
    if (price > 10000000) {
        tax += (price - 10000000) * 0.065;
        price = 10000000;
    }
    if (price > 5000000) {
        tax += (price - 5000000) * 0.055;
        price = 5000000;
    }
    if (price > 4000000) {
        tax += (price - 4000000) * 0.045;
        price = 4000000;
    }
    if (price > 3000000) {
        tax += (price - 3000000) * 0.035;
        price = 3000000;
    }
    if (price > 2000000) {
        tax += (price - 2000000) * 0.025;
        price = 2000000;
    }
    if (price > 400000) {
        tax += (price - 400000) * 0.02;
        price = 400000;
    }
    if (price > 250000) {
        tax += (price - 250000) * 0.015;
        price = 250000;
    }
    if (price > 55000) {
        tax += (price - 55000) * 0.01;
        price = 55000;
    }
    tax += price * 0.005;
    return tax;
}

function calculateRebate(provincialTax, municipalTax) {
    const provincialRebate = Math.min(provincialTax, 4000);
    const municipalRebate = Math.min(municipalTax, 4475);
    return provincialRebate + municipalRebate;
}

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
