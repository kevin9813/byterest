<div class="me-auto pc-mob-drp">
	<ul class="list-unstyled">
		{{-- <li class="dropdown pc-h-item">
			<a href="#close-navar" class="pc-head-link ms-0 btn-close-navar" id="sidebar-hide"><i class="material-icons-two-tone">arrow_back_ios</i></a>
		</li>
		<li class="dropdown pc-h-item">
			<a href="#show-navar" class="pc-head-link ms-0 btn-show-navar" id="sidebar-show"><i class="material-icons-two-tone">arrow_forward_ios</i></a>
		</li> --}}
	</ul>
</div>
<div class="ml-auto">
	
	<ul class="list-unstyled">
		<li class="dropdown pc-h-item">
			<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
				<img src="{{ asset('assets/img/widget/p4.jpg') }}" alt="user-image" class="user-avtar">
				<span>
					<span class="user-name">{{ session('user_name') }}</span>
					<span class="user-desc">Administrator</span>
				</span>
			</a>
			<div class="dropdown-menu dropdown-menu-right pc-h-dropdown">				
				<a href="/logout" class="dropdown-item">
					<i class="material-icons-two-tone">chrome_reader_mode</i>
					<span>Logout</span>
				</a>
			</div>
		</li>
	</ul>
</div>
