function countDown() {

    let days = document.getElementById("days")
    let hours = document.getElementById("hours")
    let minutes = document.getElementById("minutes")
    let seconds = document.getElementById("seconds")

    const weddingDate = "2025-07-20T15:00:00"

    var remainingTime = Date.parse(weddingDate) - Date.now()

    var remainingDays = Math.floor(remainingTime / (1000 * 60 * 60 * 24))
    var remainingHours = Math.floor((remainingTime - remainingDays * 1000 * 60 * 60 * 24) / (1000 * 60 * 60))
    var remainingMinutes = Math.floor((remainingTime - remainingDays * 1000 * 60 * 60 * 24 - remainingHours * 1000 * 60 * 60) / (1000 * 60))
    var remainingSeconds = Math.floor((remainingTime - remainingDays * 1000 * 60 * 60 * 24 - remainingHours * 1000 * 60 * 60 - remainingMinutes * 1000 * 60) / 1000)

    if (remainingDays < 10) {
        remainingDays = "0" + remainingDays
    }
    if (remainingHours < 10) {
        remainingHours = "0" + remainingHours
    }
    if (remainingMinutes < 10) {
        remainingMinutes = "0" + remainingMinutes
    }
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds
    }

    days.innerText = remainingDays
    hours.innerText = remainingHours
    minutes.innerText = remainingMinutes
    seconds.innerText = remainingSeconds
}

window.setInterval(countDown, 1000)