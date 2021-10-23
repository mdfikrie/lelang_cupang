<div>
    <div class="main-panel">
			<div class="container container-full">
				<div class="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <h1 class="text-white">Pesan Masuk</h1>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="row">
						<div class="col-md-4"> 

							<section class="card">
                                <div class="card-header bg-primary">
                                    <h4 class="text-white">Users</h4>
                                </div>
                                <input type="text" wire:model="search" placeholder="Search" class="form-control mt-2 mb-2">
								<div class="list-group list-group-messages list-group-flush">
                                    @foreach($user as $users)
                                    @if($users->id !== auth()->user()->id)
                                    @php
                                        $not_seen = App\Models\Chat::where('user_id',$users->id)->where('penerima_id',auth()->user()->id)->where('is_seen',false)->get() ?? null
                                    @endphp
									<div class="list-group-item unread" wire:click="getUser({{$users->id}})" style="cursor:pointer;">
										<div class="list-group-item-figure">
											<a class="user-avatar">
												<div class="avatar ">
                                                    @if($users->gambar)
													<img src="{{asset('gambar/profile/'.$users->gambar)}}" alt="..." class="avatar-img rounded-circle">
                                                    @else
                                                    <img src="{{asset('images/user.png')}}" alt="..." class="img-fluid rounded-circle" width="100">
                                                    @endif
												</div>
											</a>
										</div>
										<div class="list-group-item-body pl-3 pl-md-4">
											<div class="row">
												<div class="col-12 col-lg-10">
													<h4 class="list-group-item-title">
														<a > {{$users->username}}</a> 
                                                        @if(filled($not_seen))
                                                        <span class="badge badge-success">{{$not_seen->count()}}</span>
                                                        @endif
													</h4>
												</div>
											</div>
										</div>
									</div>
                                    @endif
                                    @endforeach
                                    
								</div>
							</section>
						</div>
                        <div class="col-md-8"">
                            @if(isset($allMessage))
                            <div class="card">
                            <div class="conversations" style="height: 500px!important;">
                                <div class="message-header">
                                    <div class="message-title">
                                        <div class="user ml-2">
                                            <div class="avatar avatar-offline">
                                            @if(isset($sender->gambar))
                                                <img src=" {{asset('gambar/profile/'.$sender->gambar)}} " alt="..." class="avatar-img rounded-circle border border-white">
                                            @else
                                            <img src="{{asset('images/user.png')}}" alt="..." class="img-fluid rounded-circle" width="100">
                                            @endif
                                            </div>
                                            <div class="info-user ml-2">
                                                <span class="name">@if(isset($sender)) {{$sender->username}} @endif</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="conversations-body" wire:poll="mountdata" >
                                    @if(filled($allMessage))
                                        @foreach($allMessage as $msg)

                                        <div class="message-content-wrapper" >
                                            <div class="message  @if($msg->user_id == auth()->user()->id) message-out @else  message-in @endif">
                                                <div class="avatar avatar-sm">
                                                @if($msg->user_id !== auth()->user()->id)
                                                    @if(isset($msg->user->gambar))
                                                        <img src=" {{asset('gambar/profile/'.$msg->user->gambar)}} " alt="..." class="avatar-img rounded-circle border border-white">
                                                    @else
                                                        <img src="{{asset('images/user.png')}}" alt="..." class="img-fluid rounded-circle" width="100">
                                                    @endif
                                                @endif
                                                </div>
                                                <div class="message-body">
                                                    <div class="message-content">
                                                    @if($msg->user_id !== auth()->user()->id) <div class="name">{{$msg->user->username}}</div> @endif
                                                        
                                                        <div class="content">{{$msg->text}}</div>
                                                    </div>
                                                    <div class="date">{{$msg->created_at->format('D, H:i')}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                        
                                </div>
                                <form wire:submit.prevent="SendMessage">
                                <div class="messages-form">
                                    <div class="messages-form-control">
                                        <input type="text" wire:model="message" placeholder="Type here" class="form-control input-pill input-solid message-input">
                                    </div>
                                    <div class="messages-form-tool">
                                        <button class="btn btn-circle bg-primary" style="border-radius:20px" type="submit">
                                            <span class="text-white fas fa-paper-plane"></span>
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>
                            </div>
                            @endif
                        </div>
					</div>
				</div>
			</div>
		</div>
</div>
