
				<div class="copy">
					© Creative5 2019
				</div>

			</div>



		</div>
		
		<script src="/wp-content/themes/portfolio-roma/js/lib/noframework.waypoints.min.js" ></script>

		<script>
			hash = document.querySelectorAll(".hash");
			for(let i = 0; i < hash.length; i++) {
				let text = hash[0].innerHTML;
				hash[i].innerHTML = text.split("#").join("<font>#</font>");
			}


			function toggle(e){
				let isOpen = e.classList.contains("active");
				if(isOpen){
					document.querySelector(".mobile-menu").classList.remove("active");
					document.querySelector(".mobile-menu-text").style.display = "none";
					document.body.style.overflow = "initial";
				}
				else{
					document.querySelector(".mobile-menu").classList.add("active");
					document.querySelector(".mobile-menu-text").style.display = "flex";
					document.body.style.overflow = "hidden";
				}
			}
			document.onclick = function(event) {
				var el = event.target;
				debugger
				if (event.target.parentElement.parentElement.parentElement.classList.contains("mobile-menu-text")) {
					document.querySelector(".mobile-menu").classList.remove("active");
					document.querySelector(".mobile-menu-text").style.display = "none";
					document.body.style.overflow = "initial";
				}
			};
			function addMenuScroll(toTop){
				if(toTop){
					document.querySelector(".megamenu").classList.add("scroll-up"); 
					document.querySelector(".wrapp-roma.main-content").style.marginTop = "65px";             
				}
				else{
					document.querySelector(".megamenu").classList.remove("scroll-up"); 
					document.querySelector(".wrapp-roma.main-content").style.marginTop = "0";  
				}
			}

			var oldScroll = 0;
			var oldDirect = false;

			window.addEventListener("scroll", function (event) {
				debugger
				if((this.scrollY < oldScroll) != oldDirect){
					addMenuScroll(this.scrollY < oldScroll);
					oldDirect = this.scrollY < oldScroll;
				}
				
				oldScroll = this.scrollY;
			});

			var waypoints = document.querySelectorAll('.anime');

			for (var i = 0; i < waypoints.length; i++) {
				waypoints[i].classList.add('fadeInUp');
			}


			for (var i = waypoints.length - 1; i >= 0; i--) {
					var waypoint = new Waypoint({
							element: waypoints[i],
							handler: function(direction) {
									this.element.classList.toggle('fadeInUp');
							},
							offset: '120%',
					});
			}


		</script>

		<script src="/wp-content/themes/portfolio-roma/js/finder-unused-fonts/index.js" ></script>



	</body>
</html>
