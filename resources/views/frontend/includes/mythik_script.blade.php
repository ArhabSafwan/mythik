

    <script src="{{asset('/')}}frontend/js/jquery.js"></script>
		<script src="{{asset('/')}}frontend/js/popper.min.js"></script>
		<script src="{{asset('/')}}frontend/js/bootstrap.min.js"></script>
		<script src="{{asset('/')}}frontend/js/jquery-ui.js"></script>
		<script src="{{asset('/')}}frontend/js/jquery.fancybox.js"></script>
		<script src="{{asset('/')}}frontend/js/jquery.countdown.js"></script>
		<script src="{{asset('/')}}frontend/js/appear.js"></script>
		<script src="{{asset('/')}}frontend/js/owl.js"></script>
		<script src="{{asset('/')}}frontend/js/wow.js"></script>
		<script src="{{asset('/')}}frontend/js/lightcase.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
		<script src="{{asset('/')}}frontend/js/script.js"></script>
    
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
    <script src="{{asset('/')}}app-assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <script src="{{asset('/')}}app-assets/js/extended-ui-sweetalert2.js"></script>
    <script src="{{asset('/')}}app-assets/vendor/libs/toastr/toastr.js"></script>
<script type="text/javascript">
_linkedin_partner_id = "7395308";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=7395308&fmt=gif" />
</noscript>
   
<script>
    document.querySelector('.scroll-btn').addEventListener('click', function () {
      window.scrollTo({
        top: 0,
        behavior: 'smooth' // enables slow scroll
      });
    });

    const countdown = () => {
      const endDate = new Date("July 25, 2025 00:00:00").getTime();
      const now = new Date().getTime();
      const gap = endDate - now;

      const second = 1000;
      const minute = second * 60;
      const hour = minute * 60;
      const day = hour * 24;

      const d = Math.floor(gap / day);
      const h = Math.floor((gap % day) / hour);
      const m = Math.floor((gap % hour) / minute);
      const s = Math.floor((gap % minute) / second);

      document.getElementById("days").innerText = d.toString().padStart(2, '0');
      document.getElementById("hours").innerText = h.toString().padStart(2, '0');
      document.getElementById("minutes").innerText = m.toString().padStart(2, '0');
      document.getElementById("seconds").innerText = s.toString().padStart(2, '0');
    };

document.addEventListener("DOMContentLoaded", () => {
  countdown(); // run immediately once
  setInterval(countdown, 1000); // then run every second
});


document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".climateswiper", {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-prev1",
      prevEl: ".swiper-button-next1",
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });
});
  document.querySelectorAll('.accordion-button').forEach(button => {
    const icon = button.querySelector('.icon-toggle');

    button.addEventListener('click', function () {
      const isExpanded = button.classList.contains('collapsed');
      setTimeout(() => {
        icon.textContent = isExpanded ? '×' : '+';
      }, 250); // Wait for collapse transition
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.querySelector('.search-toggle-btn');
    const searchForm = document.querySelector('.search-form');
    const searchInput = document.querySelector('.search-input');
    const applyNowBtn = document.querySelector('.apply-now-btn');

    toggleBtn.addEventListener('click', function (e) {
      e.preventDefault();
      searchForm.classList.toggle('active');

      if (searchForm.classList.contains('active')) {
        searchInput.focus();
        applyNowBtn.classList.add('hidden');
      } else {
        searchInput.value = '';
        applyNowBtn.classList.remove('hidden');
      }
    });

    // Collapse search when clicking outside
    document.addEventListener('click', function (e) {
      const isClickInside = searchForm.contains(e.target) || toggleBtn.contains(e.target);

      if (!isClickInside) {
        searchForm.classList.remove('active');
        searchInput.value = '';
        applyNowBtn.classList.remove('hidden');
      }
    });
  });

</script>

@if(session('status'))
    <script>
        toastr.success("{{ session('status') }}");
    </script>
@endif

<script>
document.getElementById('staticSearchForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const query = document.getElementById('staticSearchInput').value.toLowerCase().trim();

    if (query.length < 2) {
        toastr.info("Please enter at least 2 characters.", "Search");
        return;
    }

    fetch("search-index.json")
        .then(response => {
            if (!response.ok) throw new Error("Network response was not ok");
            return response.json();
        })
        .then(data => {
            // Find first item where title or content includes the query
            const match = data.find(item =>
                item.title.toLowerCase().includes(query) ||
                item.content.toLowerCase().includes(query)
            );

            if (match) {
                window.location.href = match.url;  // Redirect to matched page
            } else {
                toastr.warning("No results found.", "Search");
            }
        })
        .catch(error => {
            console.error('Fetch error:', error);
            toastr.error("Search failed. Please try again.", "Error");
        });
});
</script>
  @stack('fscript')
  @stack('script')