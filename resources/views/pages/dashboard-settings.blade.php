@extends('layouts.dashboard')

@section('title')
    UStore Dashboard Setting
@endsection

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
	<div class="container-fluid">
		<div class="dashboard-heading">
			<h2 class="dashboard-title">Store Settings</h2>
			<p class="dashboard-subtitle">Make store that profitable</p>
		</div>
		<div class="dashboard-content">
			<div class="row">
				<div class="col-12">
					<form action="{{ route('dashboard-settings-redirect', 'dashboard-settings-store') }}" method="POST" enctype="multipart/form-data">
						@csrf
                        <div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Store Name</label>
											<input type="text" class="form-control" name="store_name" value="{{ $user->store_name }}" style="border-radius: 24px" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Category</label>
											<select name="categories_id" class="form-control" style="border-radius: 24px">
                                                <option value="{{ $user->categories_id }}">Not changed</option>
                                                @foreach ($categories as $categories)
                                                  <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                                @endforeach
                                              </select>
										</div>
									</div>
									<div class="col-md-6">
                                        <div class="form-group">
                                          <label>Store</label>
                                          <p class="text-muted">
                                            Do you also want to close shop?
                                          </p>
                                          <div
                                            class="custom-control custom-radio custom-control-inline"
                                          >
                                            <input
                                              type="radio"
                                              class="custom-control-input"
                                              name="store_status"
                                              id="openStoreTrue"
                                              value="1"
                                              {{ $user->store_status == 1 ? 'checked' : '' }}
                                            />
                                            <label
                                              for="openStoreTrue"
                                              class="custom-control-label"
                                            >
                                              Open
                                            </label>
                                          </div>
                                          <div
                                            class="custom-control custom-radio custom-control-inline"
                                          >
                                            <input
                                              type="radio"
                                              class="custom-control-input"
                                              name="store_status"
                                              id="openStoreFalse"
                                              value="0"
                                              {{ $user->store_status == 0 || $user->store_status == NULL ? 'checked' : '' }}
                                            />
                                            <label
                                              for="openStoreFalse"
                                              class="custom-control-label"
                                            >
                                              Temporarily Close
                                            </label>
                                          </div>
                                        </div>
                                      </div>
								</div>
								<!-- Button -->
								<div class="row">
									<div class="col text-right">
										<button type="submit" class="btn btn-success px-5">Save Now</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
