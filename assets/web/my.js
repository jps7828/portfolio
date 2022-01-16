$(document).ready(function() {
	// Dark - Light mode code
	initTheme();

	function initTheme() {
		var darkThemeSelected =
			localStorage.getItem("darkSwitch") !== null &&
			localStorage.getItem("darkSwitch") === "dark";
		darkThemeSelected
			? document.body.setAttribute("data-theme", "dark")
			: document.body.setAttribute("data-theme", "light");
		darkThemeSelected
			? (document.getElementById("my-dark-theme").style.display = "none")
			: (document.getElementById("my-light-theme").style.display = "none");
	}

	document.getElementById("my-dark-theme").addEventListener("click", () => {
		document.body.setAttribute("data-theme", "dark");
		localStorage.setItem("darkSwitch", "dark");
		document.getElementById("my-light-theme").style.display = "block";
		document.getElementById("my-dark-theme").style.display = "none";
	});

	document.getElementById("my-light-theme").addEventListener("click", () => {
		document.body.setAttribute("data-theme", "light");
		localStorage.removeItem("darkSwitch");
		document.getElementById("my-light-theme").style.display = "none";
		document.getElementById("my-dark-theme").style.display = "block";
	});
});
// Dark - Light mode code

$(document).ready(function() {
	$("#slider-carousel").owlCarousel({
		loop: true,
		margin: 50,
		responsiveClass: true,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
				nav: false
			},
			600: {
				items: 3,
				nav: false
			},
			1000: {
				items: 1,
				nav: false
			}
		}
	});
});

$(document).ready(function() {
	$("#three-carousel").owlCarousel({
		loop: true,
		margin: 50,
		responsiveClass: true,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
				nav: false
			},
			600: {
				items: 3,
				nav: false
			},
			1000: {
				items: 3,
				nav: false
			}
		}
	});
});

$(document).ready(function() {
	$("#owl-one").owlCarousel({
		loop: true,
		margin: 100,
		responsiveClass: true,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
				nav: false
			},
			600: {
				items: 1,
				nav: false
			},
			1000: {
				items: 1,
				nav: false
			}
		}
	});
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
	"use strict";

	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.querySelectorAll(".needs-validation");

	// Loop over them and prevent submission
	Array.prototype.slice.call(forms).forEach(function(form) {
		form.addEventListener(
			"submit",
			function(event) {
				if (!form.checkValidity()) {
					event.preventDefault();
					event.stopPropagation();
				}

				form.classList.add("was-validated");
			},
			false
		);
	});
})();






// CONTACT US FORM --------------------
$("#contact").submit(function() {
	// Call ajax for pass data to other place
	$.ajax({
		type: "POST",
		url: "Web/ContactUs/insert",
		data: $(this).serialize() // getting filled value in serialize form
	})
		.done(function(data) {
			// if getting done then call.
			$("#sent")
				.show(2000)
				.fadeOut(6000); // show the response
			$("#submit").attr("disabled", true);
			document.getElementById("contact").reset();
		})
		.fail(function() {
			// if fail then getting message

			// just in case posting your form failed
			$("#notsent")
				.show(2000)
				.fadeOut(6000); // show the response
		});

	// to prevent refreshing the whole page
	return false;
});

// Subscribe FORM --------------------
$("#subscription").submit(function() {
	// Call ajax for pass data to other place
	$.ajax({
		type: "POST",
		url: '<?= base_url("Web/ContactUs/subscription")?>',
		data: $(this).serialize() // getting filled value in serialize form
	})
		.done(function(data) {
			// if getting done then call.
			$("#done2")
				.show(2000)
				.fadeOut(8000); // show the response
			$("#button").attr("disabled", true);
			document.getElementById("subscription").reset();
		})
		.fail(function() {
			// if fail then getting message

			// just in case posting your form failed
			$("#notdone2")
				.show(2000)
				.fadeOut(8000); // show the response
		});

	// to prevent refreshing the whole page page
	return false;
});
