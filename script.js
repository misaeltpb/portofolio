(function() {
  emailjs.init("DVXFFJxAYe13p5Qzo");
})();

document.getElementById("contact-form").addEventListener("submit", function(event) {
  event.preventDefault();

  emailjs.sendForm("service_gmail123", "template_contact", this)
    .then(() => {
      alert("✅ Pesan berhasil dikirim!");
      this.reset();
    }, (error) => {
      alert("❌ Gagal mengirim pesan.");
      console.error("EmailJS Error:", error);
    });
});
