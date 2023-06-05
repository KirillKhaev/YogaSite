let LoginPopup = document.querySelector(".pop_up_login_container");
let RegPopup = document.querySelector(".pop_up_reg_container");
function OpenLoginPopup() {
	LoginPopup.classList.remove('hide_login_pop_up');
	RegPopup.classList.add('hide_reg_pop_up');
};
function CloseLoginPopup() {
	LoginPopup.classList.add('hide_login_pop_up');
} 
function OpenRegPopup() {
	RegPopup.classList.remove('hide_reg_pop_up');
	LoginPopup.classList.add('hide_login_pop_up');
};
function CloseRegPopup() {
	RegPopup.classList.add('hide_reg_pop_up');
} 