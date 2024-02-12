<!------------------- FOOTER ------------------------>
<footer class="border-top mt-5">
    <div class="container mt-5 mb-5">
        <div class="row d-flex flex-lg-row flex-column-reverse">
            <div class="col-lg-5 col-12 mt-lg-0 mt-4">
                <div class="d-flex">
                    <img src="images/logo.png" alt="logo" width="40" height="40" />
                    <h3 class="mt-2 ms-1">Songkok Marwah</h3>
                </div>
                <div>
                    <span class="text-black-50 pt-2 pb-xxl-4"
                        >©
                        <span id="currentYear"></span>
                        <a href="https://songkokmarwah.com/" class="text-decoration-none text-black-50">PT INTI MARWAH INDUSTRI™</a><br />
                        All Rights Reserved.
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-12 d-flex flex-column mt-3 mt-lg-0">
                <h5>Team Pemasaran Kami</h5>
                @foreach ($teams as $team)
                <a href="" class="link--footer text-decoration-none text-black-50 mb-2">{{ $team->wilayah }} : {{ $team->name }} ( {{ $team->no_hp }} )</a>
                @endforeach
            </div>
            <div class="col-lg-3 col-12 d-flex flex-column">
                <h5>Sosmed</h5>
                @foreach ($sosmeds as $sosmed)
                <a href="{{ $sosmed->link }}" class="link--footer text-decoration-none text-black-50 mb-2"><i class="me-2 bi bi-{{ strtolower($sosmed->nama) }}"></i>Songkok Marwah</a>
                @endforeach
            </div>
        </div>
    </div>
</footer>
<!------------------- END FOOTER ------------------------>
