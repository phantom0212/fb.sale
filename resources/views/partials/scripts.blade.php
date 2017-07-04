<!-- begin jQuery -->

<script type="text/javascript" src="{{ asset('fsale/develop/js/jsMain.js') }}"></script>
<script type="text/javascript" src="{{ asset('fsale/develop/js/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('fsale/develop/js/masonry.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('fsale/develop/sweetalert/dist/sweetalert.min.js') }}"></script>
@yield('script')
<script>
    $('#list-post').masonry({
        itemSelector: '.news-item',
        columnWidth: 3
    });
</script>