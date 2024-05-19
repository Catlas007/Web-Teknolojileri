document.addEventListener('DOMContentLoaded', function() {
    const infoDiv = document.getElementById('info');

    fetch('https://tr.wikipedia.org/api/rest_v1/page/summary/Todd_Howard')
        .then(response => {
            if (!response.ok) {
                throw new Error('Networkten cevap alırken sorun yaşandı' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            if (data.type === 'standard') {
                const content = `
                    <h4>${data.title}</h4>
                    <small>${data.extract}</small>
                    <a href="${data.content_urls.desktop.page}" target="_blank">Wikipedia'da daha fazlasını öğrenin!</a>
                `;
                infoDiv.innerHTML = content;
            } else {
                infoDiv.innerHTML = 'Bilgi alınamadı.';
            }
        })
        .catch(error => {
            console.error('Veri alımında sorun yaşandı:', error);
            infoDiv.innerHTML = 'Veri Alımında Sorun Yaşandı.';
        });
});