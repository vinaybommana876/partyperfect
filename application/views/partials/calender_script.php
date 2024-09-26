<script>
		(function($) {
			"use strict";

			document.addEventListener('DOMContentLoaded', function() {
				var today = new Date(),
					year = today.getFullYear(),
					month = today.getMonth(),
					monthTag = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
					day = today.getDate(),
					days = document.getElementsByTagName('td'),
					selectedDay,
					selectedSlots = [],
					setDate,
					daysLen = days.length;

				function Calendar(selector, options) {
					this.options = options;
					this.draw();
				}

				Calendar.prototype.draw = function() {
					this.getCookie('selected_day');
					this.getOptions();
					this.drawDays();
					var that = this,
						reset = document.getElementById('reset'),
						pre = document.getElementsByClassName('pre-button'),
						next = document.getElementsByClassName('next-button');

					pre[0].addEventListener('click', function() {
						that.preMonth();
					});
					next[0].addEventListener('click', function() {
						that.nextMonth();
					});
					reset.addEventListener('click', function() {
						that.reset();
					});
					while (daysLen--) {
						days[daysLen].addEventListener('click', function() {
							that.clickDay(this);
						});
					}
					document.getElementById('proceed').addEventListener('click', function() {
						that.bookSlots();
					});
				};

				Calendar.prototype.drawHeader = function(e) {
					var headDay = document.getElementsByClassName('head-day'),
						headMonth = document.getElementsByClassName('head-month');

					e ? headDay[0].innerHTML = e : headDay[0].innerHTML = day;
					headMonth[0].innerHTML = monthTag[month] + " - " + year;
				};

				Calendar.prototype.drawDays = function() {
					var startDay = new Date(year, month, 1).getDay(),
						nDays = new Date(year, month + 1, 0).getDate(),
						n = startDay;

					for (var k = 0; k < 42; k++) {
						days[k].innerHTML = '';
						days[k].id = '';
						days[k].className = '';
					}

					for (var i = 1; i <= nDays; i++) {
						days[n].innerHTML = i;
						n++;
					}

					for (var j = 0; j < 42; j++) {
						if (days[j].innerHTML === "") {
							days[j].id = "disabled";
						} else if (j === day + startDay - 1) {
							if ((this.options && (month === setDate.getMonth()) && (year === setDate.getFullYear())) || (!this.options && (month === today.getMonth()) && (year === today.getFullYear()))) {
								this.drawHeader(day);
								days[j].id = "today";
							}
						}
						if (selectedDay) {
							if ((j === selectedDay.getDate() + startDay - 1) && (month === selectedDay.getMonth()) && (year === selectedDay.getFullYear())) {
								days[j].className = "selected";
								this.drawHeader(selectedDay.getDate());
							}
						}
					}
				};

				Calendar.prototype.clickDay = function(o) {
					var selected = document.getElementsByClassName("selected"),
						len = selected.length;

					if (len !== 0) {
						selected[0].className = "";
					}

					o.className = "selected";
					selectedDay = new Date(year, month, o.innerHTML);

					this.drawHeader(o.innerHTML);

					// Pass the selected day, month, and year to showTimeSlots
					this.showTimeSlots(o.innerHTML, month, year);

					this.setCookie('selected_day', 1);
				};


				Calendar.prototype.preMonth = function() {
					if (month < 1) {
						month = 11;
						year = year - 1;
					} else {
						month = month - 1;
					}
					this.drawHeader(1);
					this.drawDays();
				};

				Calendar.prototype.nextMonth = function() {
					if (month >= 11) {
						month = 0;
						year = year + 1;
					} else {
						month = month + 1;
					}
					this.drawHeader(1);
					this.drawDays();
				};

				Calendar.prototype.getOptions = function() {
					if (this.options) {
						var sets = this.options.split('-');
						setDate = new Date(sets[0], sets[1] - 1, sets[2]);
						day = setDate.getDate();
						year = setDate.getFullYear();
						month = setDate.getMonth();
					}
				};

				Calendar.prototype.reset = function() {
					month = today.getMonth();
					year = today.getFullYear();
					day = today.getDate();
					this.options = undefined;
					this.drawDays();
				};

				Calendar.prototype.setCookie = function(name, expiredays) {
					if (expiredays) {
						var date = new Date();
						date.setTime(date.getTime() + (expiredays * 24 * 60 * 60 * 1000));
						var expires = "; expires=" + date.toGMTString();
					} else {
						var expires = "";
					}
					document.cookie = name + "=" + selectedDay + expires + "; path=/";
				};

				Calendar.prototype.getCookie = function(name) {
					if (document.cookie.length) {
						var arrCookie = document.cookie.split(';'),
							nameEQ = name + "=";
						for (var i = 0, cLen = arrCookie.length; i < cLen; i++) {
							var c = arrCookie[i];
							while (c.charAt(0) == ' ') {
								c = c.substring(1, c.length);
							}
							if (c.indexOf(nameEQ) === 0) {
								selectedDay = new Date(c.substring(nameEQ.length, c.length));
							}
						}
					}
				};

				Calendar.prototype.showTimeSlots = function(day, month, year) {
					var timeSlotsContainer = document.getElementById('time-slots');
					timeSlotsContainer.innerHTML = ''; // Clear previous slots

					var startTime = 9; // 9 AM
					var endTime = 18; // 6 PM
					var generatedSlots = []; // Array to hold generated time slots
					var selectedSlots = []; // Array to track selected slots
					var proceedButton = document.getElementById('proceedButton'); // Get the proceed button

					for (var i = startTime; i < endTime; i++) {
						// Create slots for the hour and the hour + 1
						var slotStartHour = i;
						var slotStartMinute = 0;
						var slotEndHour = i + 1;
						var slotEndMinute = 0;

						// Add a 30-minute gap after the first hour slot
						if (i > startTime) {
							slotStartHour += 0.5; // Move start hour to the next slot
							slotStartMinute = 30; // Set minutes to 30
						}

						// Format the start and end times
						var formattedStartTime = (slotStartHour < 10 ? '0' : '') + Math.floor(slotStartHour) + ':' + (slotStartMinute === 0 ? '00' : '30');
						var formattedEndTime = (slotEndHour < 10 ? '0' : '') + Math.floor(slotEndHour) + ':00';

						// Create the time slot string
						var slotTime = formattedStartTime + ' - ' + formattedEndTime;

						// Add to generated slots array
						generatedSlots.push({
							time: slotTime,
							fullDate: new Date(year, month, day, Math.floor(slotStartHour), slotStartMinute) // Full date object for the slot
						});

						// Create button for the time slot
						var slotButton = document.createElement('button');
						slotButton.setAttribute('data-id', (i - startTime) + 1); // Set button ID
						slotButton.innerHTML = slotTime;

						// Add event listener for selecting the slot
						slotButton.addEventListener('click', (function(slotTime) {
							return function() {
								var selectedTime = slotTime; // Use the formatted time string
								if (selectedSlots.includes(selectedTime)) {
									selectedSlots = selectedSlots.filter(function(item) {
										return item !== selectedTime;
									});
									this.classList.remove('selected');
								} else {
									selectedSlots.push(selectedTime);
									this.classList.add('selected');
								}
								// Enable or disable the button based on selection
								proceedButton.disabled = selectedSlots.length === 0; // Enable button if slots are selected
							};
						})(slotTime));

						timeSlotsContainer.appendChild(slotButton);
					}

					// Update the click event for the existing Proceed button
					proceedButton.onclick = () => {
						if (selectedSlots.length === 0) {
							alert('Please select at least one time slot to proceed.'); // Show error message
						} else {
							this.finalizeSelection(day, month, year, selectedSlots); // Call your finalize method
						}
					};

					// Log the generated time slots
					console.log("Generated time slots for", day, month + 1, year, ":", generatedSlots);
				};







				// New method to handle final selection
				// New method to handle final selection
				Calendar.prototype.finalizeSelection = function(day, month, year, selectedSlots) {
					// Create a form to submit the data
					const form = document.createElement('form');
					form.method = 'POST';
					form.action = '<?php echo base_url(); ?>index.php/Dashboard/formdetails';

					// Create and append hidden input fields for each piece of data
					const dayInput = document.createElement('input');
					dayInput.type = 'hidden';
					dayInput.name = 'day';
					dayInput.value = day;
					form.appendChild(dayInput);

					const monthInput = document.createElement('input');
					monthInput.type = 'hidden';
					monthInput.name = 'month';
					monthInput.value = month + 1; // Adjust for human-readable format
					form.appendChild(monthInput);

					const yearInput = document.createElement('input');
					yearInput.type = 'hidden';
					yearInput.name = 'year';
					yearInput.value = year;
					form.appendChild(yearInput);

					// Create a hidden input for the slots array
					const slotsInput = document.createElement('input');
					slotsInput.type = 'hidden';
					slotsInput.name = 'slots';
					slotsInput.value = JSON.stringify(selectedSlots); // Send as a JSON string
					form.appendChild(slotsInput);

					// Append the form to the body and submit it
					document.body.appendChild(form);
					form.submit();
				};






				Calendar.prototype.bookSlots = function() {
					var date = selectedDay.toISOString().split('T')[0];
					if (selectedSlots.length === 0) {
						alert('No time slots selected.');
						return;
					}
					$.ajax({
						url: 'index.php/Dashboard/book_slots',
						type: 'POST',
						data: {
							date: date,
							slots: selectedSlots
						},
						success: function(response) {
							alert(response.message);
							if (response.status === 'success') {
								selectedSlots = [];
								calendar.showTimeSlots();
							}
						},
						error: function() {
							alert('Error booking slots.');
						}
					});
				};

				var calendar = new Calendar();
			}, false);
		})(jQuery);
	</script>
	<script>
		$(document).ready(function() {
			var selectedButtons = [];

			// Handle button click
			$('.button').click(function() {
				var buttonId = $(this).data('id');

				// Toggle selection
				if ($.inArray(buttonId, selectedButtons) === -1) {
					selectedButtons.push(buttonId);
					$(this).addClass('selected');
					showSubmitButton(); // Show submit button if selections are made
				} else {
					selectedButtons = $.grep(selectedButtons, function(value) {
						return value != buttonId;
					});
					$(this).removeClass('selected');
					if (selectedButtons.length === 0) {
						hideSubmitButton(); // Hide submit button if no selections are left
					}
				}
			});

			// Function to show submit button
			function showSubmitButton() {
				if ($('#submitBtn').length === 0) { // Ensure submit button is not already added
					$('#submitContainer').html('<button id="submitBtn">Submit</button>');
					$('#submitBtn').click(function() {
						sendDataToController(selectedButtons);
					});
				}
			}

			// Function to hide submit button
			function hideSubmitButton() {
				$('#submitContainer').empty();
			}

			// Function to send data to controller via Ajax
			function sendDataToController(data) {
				$.ajax({
					url: '<?php echo base_url("index.php/Dashboard/save_selected_buttons"); ?>',
					method: 'POST',
					data: {
						selectedButtons: data
					},
					success: function(response) {
						alert('Buttons saved successfully!');
						// Optionally, you can handle the response from the controller
					},
					error: function(xhr, status, error) {
						alert('Error saving buttons: ' + error);
					}
				});
			}
		});
	</script>