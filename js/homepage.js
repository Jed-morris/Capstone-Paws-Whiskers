let searchForm = document.querySelector('.search-form');

let listCart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () =>{
    const i = document.getElementById("slider");
    if (i.style.width === "40%") {
        i.style.width="0";
    } else {
        i.style.width="40%";
    }
}

const alertPlaceholder = document.getElementById('liveAlertPlaceholder');

const appendAlert = (message, type) => {
    const wrapper = document.createElement('div');
    wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
    ].join('')

    alertPlaceholder.append(wrapper);
}

document.addEventListener('DOMContentLoaded', function () {
	const formContainer = document.querySelector(".form-container"),
	signUpBtn = document.querySelector("#signUp"),
    loginBtn = document.querySelector("#logIn");

	var password=document.getElementById("floatingPwd");
	var confirmpwd=document.getElementById("floatingCPassword");

	var length = document.getElementById("length");
	var matchAlert = document.getElementById("matchAlert");
	//var dupAlert = document.getElementById("dupAlert");

    var f = document.forms["regForm"].elements;

	loginBtn.addEventListener("click",(e) =>  {
		formContainer.classList.remove("active");
	});

	signUpBtn.addEventListener("click",(e) =>  {
		formContainer.classList.add("active");
	});

	// When the user clicks on the password field, show the message box
	password.onfocus = function() {
		document.getElementById("message").style.display = "block";
	}

	// When the user clicks outside of the password field, hide the message box
	password.onblur = function() {
		document.getElementById("message").style.display = "none";
	}

    	// When the user starts to type something inside the password field
	password.onkeyup = function() {
        // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if(password.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }
    
        // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if(password.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }
    
        // Validate numbers
            var numbers = /[0-9]/g;
            if(password.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }
    
        // Validate length
            if(password.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
                }
        }

	// When the user starts to type something inside the confirm password field
	confirmpwd.onkeyup = function() {
		matchAlert.style.display = "block";

		if (confirmpwd.value.match(password.value)) {
			matchAlert.innerHTML = "Password is matched";
			matchAlert.classList.remove("invalid");
			matchAlert.classList.add("valid");
			document.getElementById('onRegister').disabled = false;
		} else {
			matchAlert.innerHTML = "Password is not matched";
			matchAlert.classList.remove("valid");
			matchAlert.classList.add("invalid");
		for (var i = 0; i < f.length; i++) {
			if (f[i].value.length == 0) cansubmit = false;
			document.getElementById('onRegister').disabled = true;
			}
		}
	}

    let iconCartSpan = document.querySelector('.nav-icons span');

    let carts = [];
    let listItems = [];
    loadStocks();
    // Function to view products in Homepage
    function loadStocks() {
        $.ajax({
            type: 'GET',
            url: '././model/load_available_stocks.php',
            success: function (response) {
                var stocks = JSON.parse(response);
                listItems = stocks;
                if (localStorage.getItem('cart')) {
                    carts = JSON.parse(localStorage.getItem('cart'));
                    addCartToView();
                }
                var rows = '';
                stocks.forEach(function (stock) {
                    rows += '<div class="card m-2">';
                    rows += '<img class="card-img-top" src="./img/' + stock.image_dir + '"/>';
                    rows += '<div class="card-body">';
                    rows += '<b>' + stock.name + '</b>';
                    rows += '<p>Php '+ stock.sales_price +'.00</p>';
                    rows += '<button class="btn btn-primary addCart" data-id="' + stock.id + '">Add to cart</button>';
                    rows += '</div>';
                    rows += '</div>';
                });
                $('#products').html(rows);
            }
        });
    }

    $(document).on('click', '.addCart', function (e) {
        e.preventDefault();
        let positionClick = e.target;
        if (positionClick.classList.contains('addCart')) {
            let id = $(this).data('id');
            let itemCart = carts.findIndex((value) => value.id == id);
            if (carts.length <= 0) {
                carts = [{
                    id: id,
                    qty: 1
                }]
            }else if (itemCart < 0) {
                carts.push({
                    id: id,
                    qty: 1
                })
            }else {
                carts[itemCart].qty = carts[itemCart].qty + 1;
            }
            addCartToView();
            localStorage.setItem('cart', JSON.stringify(carts));
        }
    });

    const addCartToView = () => {
        listCart.innerHTML = '';
        let totalQty = 0;
        if (carts.length > 0) {
            carts.forEach(cart => {
                totalQty = totalQty + cart.qty;
                let newCart = document.createElement('div');
                newCart.classList.add('item-box');
                newCart.dataset.id = cart.id;
                let positionItems = listItems.findIndex((value) => value.id == cart.id);
                let info = listItems[positionItems];
                newCart.innerHTML = `
                <div class="image mb-2">
                    <img class="img-thumbnail" src="./img/${info.image_dir}" alt="">
                </div>
                <div class="name">
                    <h6>${info.name}</h6>
                </div>
                <div class="totalPrice">
                    <span class="totalPrice">${info.sales_price * cart.qty}</span>
                </div>
                <div class="quantity">
                    <span class="minus"><</span>
                    <span>${cart.qty}</span>
                    <span class="plus">></span>
                </div>
                `;
                listCart.appendChild(newCart);
            })
        }else {
            console.log("hello");
            let newCart = document.createElement('div');
            newCart.classList.add('item-box');
            newCart.innerHTML = 'Hello, you do not have items in your cart!';
        }
        iconCartSpan.innerText = totalQty;
    }

    listCart.addEventListener('click', (e) => {
        let positionClick = e.target;
        if (positionClick.classList.contains('minus') || positionClick.classList.contains('plus')) {
            let id = positionClick.parentElement.parentElement.dataset.id;
            let type = 'minus';
            if(positionClick.classList.contains('plus')){
                type = 'plus';
            }
            changeQty(id, type);
        }
    })

    const changeQty = (id, type) => {
        let positionItemCart = carts.findIndex((value) => value.id == id);
        if (positionItemCart >=0) {
            switch (type) {
                case 'plus':
                    let x = carts[positionItemCart].qty = carts[positionItemCart].qty + 1;
                    console.log(x);
                    break;
                default:
                    let changeValue = carts[positionItemCart].qty - 1;
                    if (changeValue > 0) {
                        carts[positionItemCart].qty = changeValue;
                    } else {
                        carts.splice(positionItemCart, 1);
                    }
                    break;
            }
        }
        localStorage.setItem('cart', JSON.stringify(carts));
        addCartToView();
    }


    // Add signup form submit
    $('#signupForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            url: '././model/homepage.php',
            type: 'POST',
            data: data,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response) {
                    appendAlert(response,'danger');
                } else {
                    appendAlert('Your account has been successfully created!','success');
                    formContainer.classList.remove("active");
                }
            },
            error: function(xhr, status, error) {
                appendAlert(error,'danger');
            }
        });
    });

    // Add signup form submit
    $('#loginForm').submit(function (e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            url: '././model/homepage.php',
            type: 'POST',
            data: data,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response) {
                    appendAlert(response,'danger');
                } else {
                    window.location.reload();
                }
            },
            error: function(xhr, status, error) {
                appendAlert(error,'danger');
            }
        });
    });
});