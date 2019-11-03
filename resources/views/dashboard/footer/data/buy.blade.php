    <script type="text/javascript" src="{{asset('assets/gritter/js/jquery.gritter.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}" ></script>
    <!--script for this page only-->
    <script src="{{asset('js/gritter.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/pulstate.js')}}" type="text/javascript"></script>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      var tagWidth = $('#tagWidth').width();
      var nameWidth = $('#nameWidth').width();

      var diff = (tagWidth - nameWidth)/2;
      var percentage = (diff/tagWidth) * 100;
      var addPercentage = percentage + '%';

      $('#nameWidth').css('left', addPercentage);

      var screenSize = $('#screenSize').width();
      if(screenSize < 768) {
        $('.forBigScreen').hide();
      }
    });
  </script>

    <script>
      $(function () {
        $(":button").on('click', function () {
          $(":button").attr('disabled', true);
        });
      });
    </script>
    <script>
        $(function () {
            $(".alert-success").fadeTo(3000, 2000).slideUp(1000, function () {
                $(".alert-success").slideUp(1000);
            });
        })
    </script>
    <script>
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function () {
            $('#updatePayment').on('click', function () {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, UPDATE!',
                }).then((result) => {
                    if (result.value) {
                        var userId = $('#user_id').val();
                        $.ajax({
                           type: 'post',
                           url: '/update/payment',
                            data:{'user_id': userId},

                           success: function () {
                               Swal.fire(
                                   'Payment Updated!',
                                   'User Payment Updated.',
                                   'success'
                               );
                               window.location.href = "/users";
                           },
                            error: function () {
                                Swal.fire(
                                    'Ooops!',
                                    'Something went wrong!',
                                    'Failure'
                                )
                            }
                        });
                    }
                })
            })
        })
    </script>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>

    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>

  <!--custom switch-->
  <script src="{{asset('js/bootstrap-switch.js')}}"></script>
  <!--custom tagsinput-->
  <script src="{{asset('js/jquery.tagsinput.js')}}"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="{{asset('js/ga.js')}}"></script>

  <script type="text/javascript" src="{{asset('assets/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
  <script src="{{asset('js/respond.min.js')}}" ></script>

  <!--right slidebar-->
  <script src="{{asset('js/slidebars.min.js')}}"></script>


  <!--common script for all pages-->
  <script src="{{asset('js/common-scripts.js')}}"></script>

  <!--script for this page-->
  <script src="{{asset('js/form-component.js')}}"></script>
