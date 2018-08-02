<raw>
    <span></span>
    this.root.innerHTML = opts.content

    <script>
        this.updateContent = function () {
            this.root.innerHTML = opts.content;
        };

        this.on('update', function() {
            this.updateContent();
        });

        this.updateContent();
    </script>
</raw>
