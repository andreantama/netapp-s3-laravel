<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uji Coba KONVA JS</title>
    <script src="{{ asset('node_modules/konva/konva.min.js') }}"></script>
</head>
<body>
    <h1>Url gambar dari HomeController</h1>
    <textarea  rows="4" cols="200">{{ $url }}</textarea>
    <h1>Canvas tampil dibawah ini</h1>
    <div id="container"></div>
    <script defer src="{{ asset('node_modules/alpinejs/dist/cdn.min.js') }}"></script>

    <script>
        var width = window.innerWidth;
        var height = window.innerHeight;

        var stage = new Konva.Stage({
            container: 'container',
            width: width,
            height: height,
        });

        var layer = new Konva.Layer();
        stage.add(layer);

        // alternative API:
        Konva.Image.fromURL("{{ $url }}", function (darthNode) {
            darthNode.setAttrs({
            x: 200,
            y: 50,
            scaleX: 0.5,
            scaleY: 0.5,
            cornerRadius: 20,
            });
            layer.add(darthNode);
        });
    </script>
</body>
</html>
