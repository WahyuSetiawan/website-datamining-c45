<?php include './head.php'; ?>
<script>

    var tree_structure = {
        chart: {
            container: "#OrganiseChart6",
            levelSeparation: 20,
            siblingSeparation: 15,
            subTeeSeparation: 15,
            rootOrientation: "NORTH",
            node: {
                HTMLclass: "tennis-draw",
                drawLineThrough: true
            },
            connectors: {
                type: "straight",
                style: {
                    "stroke-width": 2,
                    "stroke": "#ccc"
                }
            }
        }
    };

    function GenerateTreePohonKeputusan() {
        $.get("Algoritma_c45_tree.php", function (data) {
            var data = JSON.parse(data);
            tree_structure['nodeStructure'] = data;
            
            new Treant(tree_structure);
        });
    }



    function GenerateKeputusan() {
        $.post("Algoritma_c45_service.php", function (data) {
            alert("success");
            GetPohonKeputusan();
        });
    }


    function GetPohonKeputusan() {
        $.get("Algoritma_c45_show.php", function (data) {
            $('#tampil_data').html(data);
        });

    }

    GetPohonKeputusan();
    GenerateTreePohonKeputusan();
</script>


<div class="selficon">
    <div class="row">
        <h3> <strong>Pohon Keputusan</strong></h3>
        <h2>Halaman Membuat Pohon Keputusan</h2>
    </div>
</div>

<hr>

<div class="selficon">
    <button onclick="GenerateKeputusan()" class="btn btn-primary">Generate Pohon Keputusan</button>
</div>

<div class="chart" id="OrganiseChart6"></div>
<div id="tampil_data"></div>

<script></script>
<?php include './footer.php'; ?>
