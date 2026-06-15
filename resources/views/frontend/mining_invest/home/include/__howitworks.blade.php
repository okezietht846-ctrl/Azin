@php
    $landingContent = \App\Models\LandingContent::where('type','howitworks')->where('locale',app()->getLocale())->get();
@endphp





  <div id="notification-container" style="position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); display: flex; flex-direction: column; gap: 10px; z-index: 1000; max-width: 90%;"></div>

  <script>
    // Function to generate culturally relevant names for each country
    function getRandomName(country) {
      const namesByCountry = {
        Switzerland: { firstNames: ["Hans", "Anna", "Peter", "Sophie", "Thomas", "Lara", "Mark", "Julia", "Daniel", "Laura"], lastNames: ["Müller", "Meier", "Schmid", "Keller", "Fischer", "Berger", "Weber", "Huber", "Meyer", "Wagner"] },
        Italy: { firstNames: ["Giovanni", "Maria", "Luca", "Sofia", "Marco", "Giulia", "Francesco", "Alessia", "Andrea", "Chiara"], lastNames: ["Rossi", "Bianchi", "Romano", "Conti", "Esposito", "Colombo", "Ricci", "Marino", "Greco", "Barbieri"] },
        UK: { firstNames: ["James", "Emma", "Oliver", "Charlotte", "William", "Amelia", "Thomas", "Isabella", "Harry", "Sophia"], lastNames: ["Smith", "Jones", "Taylor", "Brown", "Wilson", "Evans", "Thomas", "Roberts", "Johnson", "Lewis"] },
        USA: { firstNames: ["Michael", "Emily", "Christopher", "Sarah", "Matthew", "Jessica", "David", "Ashley", "Daniel", "Elizabeth"], lastNames: ["Johnson", "Williams", "Brown", "Davis", "Miller", "Wilson", "Moore", "Taylor", "Anderson", "Thomas"] },
        Germany: { firstNames: ["Lukas", "Lea", "Felix", "Lena", "Tim", "Hannah", "Jonas", "Emily", "Paul", "Laura"], lastNames: ["Schmidt", "Schneider", "Fischer", "Weber", "Meyer", "Wagner", "Becker", "Hoffmann", "Schulz", "Koch"] },
        Australia: { firstNames: ["Jack", "Olivia", "William", "Ava", "Noah", "Charlotte", "Lucas", "Mia", "Thomas", "Amelia"], lastNames: ["Smith", "Jones", "Williams", "Brown", "Wilson", "Taylor", "Anderson", "Thomas", "Martin", "Lee"] },
        Canada: { firstNames: ["Liam", "Emma", "Noah", "Olivia", "Lucas", "Sophia", "Benjamin", "Ava", "Mason", "Isabella"], lastNames: ["Smith", "Brown", "Tremblay", "Martin", "Roy", "Lee", "Wilson", "Johnson", "Taylor", "Clark"] },
        France: { firstNames: ["Louis", "Emma", "Gabriel", "Jade", "Lucas", "Louise", "Nathan", "Chloé", "Hugo", "Camille"], lastNames: ["Martin", "Bernard", "Dubois", "Thomas", "Robert", "Richard", "Petit", "Durand", "Leroy", "Moreau"] },
        Japan: { firstNames: ["Hiroshi", "Yuki", "Ren", "Aoi", "Haruto", "Sakura", "Kaito", "Rin", "Sora", "Mei"], lastNames: ["Sato", "Suzuki", "Takahashi", "Tanaka", "Watanabe", "Ito", "Yamamoto", "Nakamura", "Kobayashi", "Yoshida"] },
        Brazil: { firstNames: ["Gabriel", "Maria", "Lucas", "Ana", "Pedro", "Julia", "Matheus", "Laura", "Rafael", "Beatriz"], lastNames: ["Silva", "Santos", "Oliveira", "Souza", "Rodrigues", "Ferreira", "Alves", "Pereira", "Lima", "Costa"] },
        India: { firstNames: ["Aarav", "Aanya", "Vihaan", "Ananya", "Arjun", "Diya", "Rohan", "Ishaan", "Saanvi", "Advik"], lastNames: ["Patel", "Sharma", "Singh", "Kumar", "Gupta", "Jain", "Verma", "Malhotra", "Choudhary", "Reddy"] },
        China: { firstNames: ["Wei", "Jing", "Lei", "Mei", "Feng", "Li", "Yan", "Xin", "Tao", "Hui"], lastNames: ["Wang", "Li", "Zhang", "Liu", "Chen", "Yang", "Huang", "Zhao", "Wu", "Zhou"] },
        Russia: { firstNames: ["Alexander", "Anna", "Dmitry", "Olga", "Ivan", "Elena", "Sergey", "Natalia", "Andrei", "Tatiana"], lastNames: ["Ivanov", "Smirnov", "Kuznetsov", "Popov", "Sokolov", "Lebedev", "Kozlov", "Novikov", "Morozov", "Petrov"] },
        SouthAfrica: { firstNames: ["Liam", "Emma", "Noah", "Olivia", "Lucas", "Sophia", "Ethan", "Ava", "Mason", "Isabella"], lastNames: ["Dlamini", "Nkosi", "Botha", "Van der Merwe", "Mbeki", "Smith", "Jones", "Williams", "Brown", "Taylor"] }
      };

      const { firstNames, lastNames } = namesByCountry[country] || { firstNames: ["John"], lastNames: ["Doe"] };
      const firstName = firstNames[Math.floor(Math.random() * firstNames.length)];
      const lastName = lastNames[Math.floor(Math.random() * lastNames.length)];
      return `${firstName} ${lastName}`;
    }

    // Function to generate random countries
    function getRandomCountry() {
      const countries = ["Switzerland", "Italy", "UK", "USA", "Germany", "Australia", "Canada", "France", "Japan", "Brazil", "India", "China", "Russia", "SouthAfrica"];
      return countries[Math.floor(Math.random() * countries.length)];
    }

    // Function to generate random amounts
    function getRandomAmount(isWithdrawal) {
      if (isWithdrawal) {
        return Math.floor(Math.random() * 50000) + 50000; // Withdrawals: $50,000 to $100,000
      } else {
        return Math.floor(Math.random() * 50000) + 1000; // Investments: $1,000 to $50,000
      }
    }

    // Generate 700 dummy messages with unique names
    const messages = [];
    const usedNames = new Set(); // Track used names to ensure uniqueness

    for (let i = 0; i < 700; i++) {
      let name, country, message;
      let attempts = 0;
      const maxAttempts = 100; // Fallback to prevent infinite loops

      do {
        country = getRandomCountry();
        name = getRandomName(country);
        const isWithdrawal = Math.random() > 0.5; // 50% chance of withdrawal
        const amount = getRandomAmount(isWithdrawal);
        message = `${name} ${isWithdrawal ? "withdrew" : "invested"} $${amount.toLocaleString()} from ${country}`;
        attempts++;
      } while (usedNames.has(name) && attempts < maxAttempts); // Ensure the name is unique

      if (attempts >= maxAttempts) {
        console.warn(`Could not generate a unique name after ${maxAttempts} attempts. Skipping.`);
        continue;
      }

      usedNames.add(name);
      messages.push(message);
    }

    const container = document.getElementById('notification-container');

    function getRandomInt(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function showNotifications() {
      // Clear existing notifications
      container.innerHTML = '';

      // Determine how many notifications to show (1 to 5)
      const count = getRandomInt(1, 5);

      // Shuffle the messages array
      const shuffledMessages = messages.sort(() => Math.random() - 0.5);

      // Display the notifications
      for (let i = 0; i < count; i++) {
        const message = shuffledMessages[i];
        const notification = document.createElement('div');
        notification.style.padding = '15px';
        notification.style.backgroundColor = '#ffffff';
        notification.style.color = '#333333';
        notification.style.borderRadius = '10px';
        notification.style.boxShadow = '0 4px 10px rgba(0, 0, 0, 0.1)';
        notification.style.opacity = '0';
        notification.style.transform = 'translateX(100%)';
        notification.style.transition = 'opacity 0.5s, transform 0.5s';
        notification.style.fontSize = '14px';
        notification.style.fontWeight = '500';
        notification.style.borderLeft = `5px solid ${message.includes("withdrew") ? '#FF5722' : '#4CAF50'}`;
        notification.textContent = message;
        container.appendChild(notification);

        // Trigger the animation
        setTimeout(() => {
          notification.style.opacity = '1';
          notification.style.transform = 'translateX(0)';
        }, 100);
      }

      // Schedule the next batch of notifications
      const delay = getRandomInt(5000, 10000); // Random delay between 2 and 5 seconds
      setTimeout(showNotifications, delay);
    }

    // Start the notification sequence
    showNotifications();
  </script>



<section class="how-it-works section-style-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12">
                <div class="section-title text-center">
                    <h4 data-aos="fade-down" data-aos-duration="2000">{{ $data['title_small'] }}</h4>
                    <h2 data-aos="fade-down" data-aos-duration="1500">
                        {{ $data['title_big'] }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($landingContent as $content)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="how-it-works-single" data-aos="fade-left" data-aos-duration="1000">
                        <div class="icon-box">
                            <img class="icon-box-icon" src="{{ asset($content->icon) }}" alt="">
                        </div>
                        <h4>{{ $content->title }}</h4>
                        <p>
                            {{ $content->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
