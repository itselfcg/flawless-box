<div class="modal fade" id="cancelModal" tabindex="-1" role="dialog"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="cancel-subscription/{{$id}}" method="post">
                @csrf
                <div class="modal-body">
                    Are you sure you want to cancel your Flawless Subscription?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-orange">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>
