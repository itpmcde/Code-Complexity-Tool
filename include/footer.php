<!-- begin:: Footer -->
<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-footer__copyright">
            2020&nbsp;&copy;&nbsp;<a href="https://github.com/itpmcde/Code-Complexity-Tool/graphs/contributors"
                                     target="_blank" class="kt-link">CDE IT Solutions</a>
        </div>
        <div class="kt-footer__menu">


            <a href="https://github.com/itpmcde/Code-Complexity-Tool/graphs/contributors" target="_blank"
               class="kt-footer__menu-link kt-link">Team</a>

        </div>
    </div>
</div>

<!-- end:: Footer -->
</div>
</div>
</div>

<!-- end:: Page -->


<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#2c77f4",
                "light": "#ffffff",
                "dark": "#282a3c",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>


<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>

<script src="https://unpkg.com/jspdf-autotable@3.5.3/dist/jspdf.plugin.autotable.js"></script>

<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="assets/mdb/js/addons/datatables2.min.js"></script>

<!--begin::Page Scripts(used by tables) -->
<script src="assets/js/pages/crud/datatables/advanced/footer-callback.js" type="text/javascript"></script>

<!--begin::Page Scripts(used by file upload) -->
<script src="assets/js/pages/crud/file-upload/dropzonejs.js" type="text/javascript"></script>

<!--begin::Page Scripts(used by sweetalert) -->
<script src="assets/js/pages/components/extended/sweetalert2.js" type="text/javascript"></script>

<script>
    let $button = $("#submit_content");
    $button.prop("disabled", true);

    $('#paste_contents').bind("change keyup input", function () {
        $button.prop("disabled", (this.value == "") ? true : false);
    });
</script>

<script>
    function generate() {

        var doc = new jsPDF()

        // Simple data example
        var head = [['CDE Complexity Report']]

        doc.autoTable({ head: head})

        // Simple html example
        doc.autoTable({ html: '#kt_table_1' })

        doc.save('CDE_Complexity_Report.pdf')
    }
</script>

<script>
    function toggleFullScreen() {
        if ((document.fullScreenElement && document.fullScreenElement !== null) ||
            (!document.mozFullScreen && !document.webkitIsFullScreen)) {
            if (document.documentElement.requestFullScreen) {
                document.documentElement.requestFullScreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullScreen) {
                document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
            }
        } else {
            if (document.cancelFullScreen) {
                document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            }
        }
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        $('.removeduplicateelement:eq(1)').remove();
    }, false);
</script>

<script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
</script>

<script type="text/javascript">
    if(window.location.pathname.split("/").pop()=="total_weight.php"){

        window.onload = function() {
            if(!window.location.hash) {
                window.location = window.location + '#loaded';
                window.location.reload();
            }
        }

    }
</script>

</body>

<!-- end::Body -->
</html>
