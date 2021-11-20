

function addData(e) {

    let trip = document.querySelector('input[name="trip"]:checked').value;
    let fcity = document.getElementById("fcity").value;
    let tcity = document.getElementById("tcity").value;
    let depdate = document.getElementById("depDate").value;
    let retdate = document.getElementById("retDate").value;
    let nop = document.getElementById("num").value;
    let fclass = document.querySelector('input[name="fclass"]:checked').value;
    let fare = document.querySelector('input[name="fare"]:checked').value;
   


    fetch('http://localhost:8000/Ticket', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            "trip": trip,
            "fcity": fcity,
            "tcity": tcity,
            "depdate": depdate,
            "retdate": retdate,
            "nop": nop,
            "fclass": fclass,
            "fare":fare
        })
    }).then(res => {
        return res.json();
    })
        .then(data => console.log(data))
        .catch(error => console.log("ERROR"))

    Swal.fire({
        title: "Thank You!",
        text: "Data Submitted Successfully!",
        icon: "success"
    }).then(function () {
        location.reload();
    });
}

