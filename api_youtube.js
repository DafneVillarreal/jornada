  <script>
      class YouTubeCarousel {
          constructor(apiKey, channelId, maxResults) {
              this.apiKey = apiKey;
              this.channelId = channelId;
              this.maxResults = maxResults;
              this.carouselInner = document.getElementById('carousel-inner');
          }

          // Método para obtener los videos más recientes del canal
          async fetchLatestVideos() {
              const response = await fetch(`https://www.googleapis.com/youtube/v3/search?key=${this.apiKey}&channelId=${this.channelId}&part=snippet,id&order=date&maxResults=${this.maxResults}`);
              const data = await response.json();
              return data.items;
          }

          // Método para crear un item de video para el carrusel
          createVideoItem(videoId, isActive) {
              return `
                  <div class="carousel-item ${isActive ? 'active' : ''}">
                      <iframe width="100%" height="315" src="https://www.youtube.com/embed/${videoId}" 
                      title="YouTube video player" frameborder="0" 
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              `;
          }

          // Método para inicializar el carrusel con los videos obtenidos
          async initCarousel() {
              const videos = await this.fetchLatestVideos();
              this.carouselInner.innerHTML = videos
                  .map((video, index) => this.createVideoItem(video.id.videoId, index === 0))
                  .join('');
          }
      }

      // Configuración del carrusel de YouTube
      const apiKey = 'YOUR_API_KEY'; // Aquí pones tu API Key
      const channelId = 'YOUR_CHANNEL_ID'; // Aquí pones el ID del canal
      const maxResults = 3;

      const youtubeCarousel = new YouTubeCarousel(apiKey, channelId, maxResults);
      youtubeCarousel.initCarousel();

  </script>
