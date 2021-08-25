</main>

<!-- Footer -->

<footer class="bg-dark text-light text-center footer fixed-bottom">
    <div class="container">
        <ul class="list-unstyled">
            <li>&#127279; IML</li>
            <li>Usage réservé au personnel de l'Institut Médico-Légal.</li>
            <li>Tout contrevenant s'expose à un écartèlement en mode colysée, romains et tutti cuanti.</li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/7a84f0a28f.js" crossorigin="anonymous">
</script>
<script src="../assets/node_modules/cleave.js/dist/cleave.min.js">
</script>
<script src="../assets/node_modules/cleave.js/dist/addons/cleave-phone.fr.js">
</script>
<script>
    // Cleave, pour formater les inputs. Seulement visuel, dynamisme ++
    var cleave = new Cleave('.input-phone-fr', {
        phone: true,
        phoneRegionCode: 'FR'
    });
    var cleave = new Cleave('.deathdate', {
        date: true,
        delimiter: '-',
        datePattern: ['d', 'm', 'Y']
    });
    var cleave = new Cleave('.appointmentDate', {
        date: true,
        delimiter: '-',
        datePattern: ['d', 'm', 'Y']
    });
</script>
<!-- Il faut impérativement src le script swal juste avant la fonction -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // SweetAlert, pour faire des alertes sexy.
    // Les propriétés sont définies par la librairie.
    // RTFM
    // Je suis obligé de le mettre ici parce dans le script ça fonctionne pas.
    // La fonction json_encode est utile mais ne permets pas les balises php en paramètres
    //
    if (<?= $addPatientSuccess ?>) {
        Swal.fire({
            icon: 'success',
            iconColor: '#94050d',
            title: 'YES!',
            text: 'Nouveau macchabée! On fait la fête!',
            footer: 'miam.',
            confirmButtonColor: '#94050d',
            background: '#151513',
            timer: '6666'
        })
    };
</script>
<!-- Dans le cas de l'utilisation de plusieurs swal, il faut apparemment les séparer dans plusieurs balises script. -->
<script>
    if (<?= $addUpdateSuccess ?>) {
        Swal.fire({
            icon: 'success',
            iconColor: '#94050d',
            text: 'Les données ont bien été modifiées.',
            confirmButtonColor: '#94050d',
            background: '#151513',
            timer: '6666'
        })
    };
</script>

</body>

</html>