document.getElementById("content").addEventListener("click", getPlaces, false)

function getPlaces() {
    const request = new XMLHttpRequest();
    request.open("GET", "../api/displayAll.php", true);
    request.onload = function () {
        if (this.status == 200) {
            let places = JSON.parse(this.responseText);
            console.log(places.data);
            let output = '<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">';
            for (let x of places.data) {
                output += "<div class='col p-3'><div class='card p-0 shadow-lg bg-body rounded all-places'><img class='card-img-top' src='../pictures/places/"+x.picture+"'alt='"+x.name+"'><h4 class='card-header text-center'>"+x.name+"</h4><div class='card-body p-2'><p class='h5 card-text text-center text-success'>" + x.price +" € </p></div><div class='card-footer text-center'><a class='btn btn-small bg-info' href='details.php?id=" + x.id + "'>Show Details</a></div></div></div>";
                console.log(output);
            }
            output +="</div>";
            document.getElementById("content").innerHTML = output;
        }
    }
    request.send(); //send request
}