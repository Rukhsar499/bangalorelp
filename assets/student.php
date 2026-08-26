
<style>
    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .heading {
      text-align: center;
      font-size: 2rem;
      color: #333;
      margin-bottom: 30px;
    }

    .testimonial-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }

    .video-card {
      position: relative;
      width: 100%;
      padding-top: 56.25%; /* 16:9 Aspect Ratio */
      border-radius: 8px;
      overflow: hidden;
      background-color: #000;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .video-card iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }

    /* Mobile Responsive Layout */
    @media (max-width: 768px) {
      .testimonial-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>

<div class="container">
    <h2 class="heading">Student Testimonial</h2>

    <div class="testimonial-grid">
      <div class="video-card">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/CPsstYjP8jw?si=AU5B0CMEDEGAwnEy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div class="video-card">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/dowpJHUEtdA?si=L-DyuQ7Oa4p_5bEV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div class="video-card">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/2zhYo8ud3KI?si=0BvZV4qURqCoJMD3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div class="video-card">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/alqKsm2JbZI?si=1gTEJrxJhEUgNRzj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>
  </div>