@extends('template.user')

@section('title', 'Installation Guide')

@section('css')
<style type="text/css">
	img.img-fluid.w-100[draggable=false] {
		margin-top: 1rem;
		margin-bottom: 1rem;
	}
</style>
@endsection

@section('body')
@php ($type = \Request::has('type') ? \Request::get('type') : $type)

<section class="container-fluid my-5 p-lg-5 p-3" style="background-color: #303030; border-radius: 10px;">
	<div class="row">
		<div class="col">
			<h2 class="h3 h2-lg">Basic Information</h2>
			<p>
				Author: Virus5600<br>
				Minimum Required Version: 1.16.100<br>
				Dependencies: Defensive Measures Add-On (Resource Pack)<br>
				Compatible with: Majority of add-ons
			</p>
		</div>
	</div>

	<hr class="bg-light hr-thicc my-5">
	
	<div class="row">
		<div class="col">
			<h2 class="h3 h2-lg">Installation</h2>
			<p>To install the Add-on, please follow the instructions provided at the "Defensive Measures Add-On Read me" file, or follow the instructions provided below:</p>
		</div>
	</div>

	<div class="row">
		<div class="col">
			{{-- If JavaScript isn't enabled, don't display the tablist but rather, display a link which allows the user to switch between the two --}}
			<noscript>
				<ul class="nav nav-tabs" role="tablist" id="tablist">
					<li class="nav-item">
						<a href="{{ route('installation', ['win10']) }}" class="nav-link {{ $type == 'win10' ? 'active' : '' }}" id="win10" data-toggle="tab" href="#win10Tab" role="tab" aria-selected="true">Windows 10</a>
					</li>

					<li class="nav-item">
						<a href="{{ route('installation', ['mobile']) }}" class="nav-link {{ $type == 'mobile' ? 'active' : '' }}" id="mobile" data-toggle="tab" href="#mobileTab" role="tab" aria-selected="false">Mobile</a>
					</li>
				</ul>
			</noscript>
			
			<ul class="nav nav-tabs js-only" role="tablist" id="tablist">
				<li class="nav-item">
					<a class="nav-link {{ $type == 'win10' ? 'active' : '' }}" id="win10" data-toggle="tab" href="#win10Tab" role="tab" aria-selected="true">Windows 10</a>
				</li>

				<li class="nav-item">
					<a class="nav-link {{ $type == 'mobile' ? 'active' : '' }}" id="mobile" data-toggle="tab" href="#mobileTab" role="tab" aria-selected="false">Mobile</a>
				</li>
			</ul>

			<div class="tab-content">
				{{-- Win 10 Instruction --}}
				<div class="tab-pane fade {{ $type == 'win10' ? 'show active' : '' }} row-spacing-5" id="win10Tab" role="tabpanel" aria-labelledby="win10">
					{{-- Step 1 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>1. <b>Extract</b> the contents of the archive anywhere in your desktop.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Win10/step1.png" draggable="false" alt="Figure 1"/>
								</div>
							</div>
						</div>
					</div>

					{{-- Step 2 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>2. Double click the mcpacks and choose Minecraft. Alternatively, you can right-click the mcpack and choose "Open with" option, then select Minecraft Bedrock.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Win10/step2.png" draggable="false" alt="Figure 2"/>
								</div>
							</div>
						</div>
					</div>

					{{-- Step 3 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>3. Open Minecraft and create a new world. Alternatively, you can just use an existing world. Just make sure to have a <b>backup</b> copy of that world.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Win10/step3.png" draggable="false" alt="Figure 3"/>
								</div>
							</div>
						</div>
					</div>

					{{-- Step 4 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>4. Enable both the <b>"Additional Modding Capabilities"</b> and <b>"Holiday Creator Features"</b> under the <b>"Experiments"</b> tab.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Win10/step4.png" draggable="false" alt="Figure 4"/>
								</div>
							</div>
						</div>
					</div>

					{{-- Step 5 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>5. Go to <b>"Behavior Packs"</b> tab and activate <b>"Defensive Measures Add-On (BP)"</b>.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Win10/step5.1.png" draggable="false" alt="Figure 5.1"/>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Win10/step5.2.png" draggable="false" alt="Figure 5.2"/>
								</div>
							</div>
						</div>
					</div>

					{{-- Step 6 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>6. Go to <b>"Resource Packs"</b> tab and activate <b>"Defensive Measures Add-On (RP)"</b> if it is not activated yet.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Win10/step6.png" draggable="false" alt="Figure 6"/>
								</div>
							</div>
						</div>
					</div>

					{{-- Step 7 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>7. Generate the world if you created a new one. If you use an existing world, you can proceed and load the world.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Win10/step7.png" draggable="false" alt="Figure 7"/>
								</div>
							</div>
						</div>
					</div>

					{{-- Step 8 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>8. Enjoy!</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Win10/step8.png" draggable="false" alt="Figure 8"/>
								</div>
							</div>
						</div>
					</div>
				</div>

				{{-- Mobile Instruction --}}
				<div class="tab-pane fade {{ $type == 'mobile' ? 'show active' : '' }} row-spacing-5" id="mobileTab" role="tabpanel" aria-labelledby="mobile">
					{{-- Step 1 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>1. Extract the contents of the archive to "Internal Storage/games/com.mojang".</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Mobile/step1.png" draggable="false" alt="Figure 1"/>
								</div>
							</div>
						</div>
					</div>

					{{-- Step 2 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>2. Move the Behavior Pack (BP) archive to “games/com.mojang/behavior_packs”.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Mobile/step2.1.png" draggable="false" alt="Figure 2.1"/>
								</div>

								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Mobile/step2.2.png" draggable="false" alt="Figure 2.2"/>
								</div>
							</div>
						</div>
					</div>

					{{-- Step 3 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>3. Move the Resource Pack (RP) archive to “games/com.mojang/resource_packs”.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Mobile/step3.1.png" draggable="false" alt="Figure 3.1"/>
								</div>

								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Mobile/step3.2.png" draggable="false" alt="Figure 3.2"/>
								</div>
							</div>
						</div>
					</div>
					
					{{-- Step 4 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>4. Open Minecraft and create a new world. Alternatively, you can just use an existing world. Just make sure to have a backup copy of that world.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Mobile/step4.png" draggable="false" alt="Figure 4"/>
								</div>
							</div>
						</div>
					</div>

					{{-- Step 5 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>5. Enable both the "Additional Modding Capabilities" and "Holiday Creator Features" under the "Experiments" tab.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Mobile/step5.png" draggable="false" alt="Figure 5"/>
								</div>
							</div>
						</div>
					</div>

					{{-- Step 6 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>6. Go to "Behavior Packs" tab and activate "Defensive Measures Add-On (BP)".</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Mobile/step6.1.png" draggable="false" alt="Figure 6.1"/>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Mobile/step6.2.png" draggable="false" alt="Figure 6.2"/>
								</div>
							</div>
						</div>
					</div>

					{{-- Step 7 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>7. Go to "Resource Packs" tab and activate "Defensive Measures Add-On (RP)" if it is not activated yet.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Mobile/step7.png" draggable="false" alt="Figure 7"/>
								</div>
							</div>
						</div>
					</div>

					{{-- Step 8 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>8. Generate the world if you created a new one. If you use an existing world, you can proceed and load the world.</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Mobile/step8.png" draggable="false" alt="Figure 8"/>
								</div>
							</div>
						</div>
					</div>

					{{-- Step 9 --}}
					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col">
									<p>9. Enjoy!</p>
								</div>
							</div>

							<div class="row">
								<div class="col-12 col-lg-6">
									<img class="img-fluid w-100" src="/images/Installations/Mobile/step9.png" draggable="false" alt="Figure 9"/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-md-6 col-lg-4 offset-md-3 offset-lg-4">
					<div class="text-center">
						<noscript>
							<a class="btn btn-primary" href="#tablist">Back to Top</a>
						</noscript>
						<button class="btn btn-primary js-only" data-scroll-to="#tablist" data-parent='body'>Back to Top</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection