 @if (session('warning'))
     <script>
         iziToast.warning({
             title: 'Attention',
             message: "{{ session('warning') }}",
             position: 'topRight',
             timeout: 4000,
         });
     </script>
 @endif
 @if (session('success'))
     <script>
         window.onload = function() {
             showToast("{{ session('success') }}");
         };
     </script>
 @endif
