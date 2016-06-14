<div class="modal fade" id="privacy-policy-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">
                    Terms &amp; Privacy
                </h4>
            </div>
            <div class="modal-body">
                @include('rtprivacypolicy::privacy-policy-content',config('rtprivacy-policy'))
            </div>
        </div>
    </div>
</div>
<script>
    if(typeof $!=='function'){
        console.log('jQuery needed for modal to work');
    }
    else{
        if (typeof $.fn.modal !== 'function') {
            var url = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js";
            document.write('<script src="' + url + '"></scr' + 'ipt>');
        }
    }
</script>