
				<div class="copy">
					© Creative5 2019
				</div>

			</div>



		</div>


		<script>
			hash = document.querySelectorAll(".hash");
			for(let i = 0; i < hash.length; i++) {
				let text = hash[0].innerHTML;
				hash[i].innerHTML = text.split("#").join("<font>#</font>");
			}
		</script>

	</body>
</html>
