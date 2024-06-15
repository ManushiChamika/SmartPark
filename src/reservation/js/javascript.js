/*alert box for unavailable parking slots*/
function showUnavailableSlotAlert(event) {
    event.preventDefault();
    alert("Sorry! This parking slot is unavailable. Choose another parking slot");
}
/*alert box to show the reservation is successful*/
function showPopup() {
    alert("Reservation successful!");
    return true;
}