{{-- signin modal --}}
<div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
              	<h5 class="modal-title" id="exampleModalLongTitle">Sign In Modal</h5>
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                  <span aria-hidden="true">&times;</span>
	            </button>
            </div>
            <div class="modal-body">
              	<div class="row">
              		<div class="col-md-12 text-center">
              			<p class="text-info">You need to signin first for apply.</p>
              		</div>
              		<div class="col-md-12">
              			<hr>
              		</div>
              		<div class="col-md-6 text-center">
              			<p>Already have an account?</p>
              			<a href="{{ url('user/login') }}" class="btn btn-info bg-info">Sign In</a>
              		</div>
              		<div class="col-md-6 text-center">
              			<p>No account?</p>
              			<a href="{{ url('user/register') }}" class="btn btn-info bg-info">Sign Up</a>
              		</div>
              	</div>
            </div>
        </div>
    </div>
</div>