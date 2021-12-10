
	<footer>
        <script>
            if (typeof head === 'function' && typeof App === 'function' && typeof app !== 'undefined') {
                head.load(app.getVendors(), function() {
                    console.table(app.getVendors());
                });
            }
        </script>
    </footer>

</body>
</html>