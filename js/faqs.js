   document.addEventListener('DOMContentLoaded', function() {
      // FAQ Data
      const faqData = {
        customer: [
          {
            question: "How can I book a vehicle online?",
            answer: "You can book directly through our website by selecting the vehicle type, pickup location, and dates. Click the 'Search' button to view available options and confirm your booking securely online."
          },
          {
            question: "What are the payment options available?",
            answer: "We accept Visa, MasterCard, bank transfers, and cash payments upon pickup. Online payments are secured with SSL encryption."
          },
          {
            question: "Can I cancel or modify my booking?",
            answer: "Yes, bookings can be modified or canceled up to 24 hours before your scheduled pickup time without any additional fees."
          },
          {
            question: "Are your vehicles insured and licensed?",
            answer: "All our vehicles are fully insured and licensed, ensuring your safety and compliance with local regulations during your travel."
          },
          {
            question: "Do you provide vehicles with drivers?",
            answer: "Yes, we provide experienced drivers for all vehicle types including cars, vans, buses, and trucks for your convenience and safety."
          }
        ],
        host: [
          {
            question: "How do I list my vehicle on your platform?",
            answer: "Register as a host on our website, complete the verification process, and upload your vehicle details with photos. Our team will review and approve your listing within 24 hours."
          },
          {
            question: "What are the commission rates?",
            answer: "We charge a competitive 15% commission on each booking. This covers platform maintenance, customer support, and payment processing."
          },
          {
            question: "How do I get paid for rentals?",
            answer: "Payments are automatically transferred to your registered bank account 24 hours after each rental period ends, minus our service fee."
          },
          {
            question: "What insurance coverage is provided?",
            answer: "All rentals include comprehensive insurance coverage. Hosts are additionally protected by our $1,000,000 liability policy."
          },
          {
            question: "Can I set my own rental prices?",
            answer: "Yes, you have full control over your pricing. Our system provides suggested rates based on market data, but you can set custom prices."
          }
        ]
      };

      // DOM Elements
      const customerBtn = document.getElementById('customer-btn');
      const hostBtn = document.getElementById('host-btn');
      const customerFaqs = document.getElementById('customer-faqs');
      const hostFaqs = document.getElementById('host-faqs');
      const searchInput = document.getElementById('faq-search-input');
      const searchBtn = document.getElementById('faq-search-btn');

      // Initialize FAQs
      function initializeFAQs() {
        renderFAQs('customer', customerFaqs);
        renderFAQs('host', hostFaqs);
        setupAccordion(customerFaqs);
        setupAccordion(hostFaqs);
      }

      // Render FAQs to DOM
      function renderFAQs(type, container) {
        container.innerHTML = '';
        faqData[type].forEach((faq, index) => {
          const faqItem = document.createElement('div');
          faqItem.className = 'faq-item';
          faqItem.style.animationDelay = `${index * 0.2}s`;
          faqItem.innerHTML = `
            <div class="faq-question">
              <h3>${faq.question}</h3>
              <div class="icon"></div>
            </div>
            <div class="faq-answer">
              <div class="faq-answer-content">
                <p>${faq.answer}</p>
              </div>
            </div>
          `;
          container.appendChild(faqItem);
        });
      }

      // Setup accordion functionality
      function setupAccordion(container) {
        const items = container.querySelectorAll('.faq-item');
        
        items.forEach(item => {
          const question = item.querySelector('.faq-question');
          const answer = item.querySelector('.faq-answer');

          question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');

            // Close all other items in the same section
            items.forEach(i => {
              if (i !== item) {
                i.classList.remove('active');
                i.querySelector('.faq-answer').style.maxHeight = null;
              }
            });

            // Toggle current item
            if (!isActive) {
              item.classList.add('active');
              answer.style.maxHeight = answer.scrollHeight + 'px';
            } else {
              item.classList.remove('active');
              answer.style.maxHeight = null;
            }
          });
        });
      }

      // Toggle between Customer and Host FAQs
      customerBtn.addEventListener('click', function() {
        customerBtn.classList.add('active');
        hostBtn.classList.remove('active');
        customerFaqs.style.display = 'block';
        hostFaqs.style.display = 'none';
        resetSearch();
      });

      hostBtn.addEventListener('click', function() {
        hostBtn.classList.add('active');
        customerBtn.classList.remove('active');
        hostFaqs.style.display = 'block';
        customerFaqs.style.display = 'none';
        resetSearch();
      });

      // FAQ Search Functionality
      function performSearch() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        
        if (searchTerm === '') {
          resetSearch();
          return;
        }
        
        // Get the currently active FAQ section
        const activeSection = customerBtn.classList.contains('active') ? customerFaqs : hostFaqs;
        const items = activeSection.querySelectorAll('.faq-item');
        
        let hasResults = false;
        
        items.forEach(item => {
          const question = item.querySelector('h3').textContent.toLowerCase();
          const answer = item.querySelector('.faq-answer-content').textContent.toLowerCase();
          
          if (question.includes(searchTerm) || answer.includes(searchTerm)) {
            item.style.display = 'block';
            item.classList.add('highlight');
            
            // Auto-expand matching items
            item.classList.add('active');
            item.querySelector('.faq-answer').style.maxHeight = item.querySelector('.faq-answer').scrollHeight + 'px';
            hasResults = true;
          } else {
            item.style.display = 'none';
            item.classList.remove('highlight');
            item.classList.remove('active');
            item.querySelector('.faq-answer').style.maxHeight = null;
          }
        });
        
        if (!hasResults) {
          const noResults = document.createElement('div');
          noResults.className = 'no-results';
          noResults.textContent = 'No matching FAQs found. Try different keywords.';
          noResults.style.textAlign = 'center';
          noResults.style.padding = '20px';
          noResults.style.color = '#666';
          
          // Remove previous no results message if exists
          const existingNoResults = activeSection.querySelector('.no-results');
          if (existingNoResults) {
            existingNoResults.remove();
          }
          
          activeSection.appendChild(noResults);
        } else {
          const existingNoResults = activeSection.querySelector('.no-results');
          if (existingNoResults) {
            existingNoResults.remove();
          }
        }
      }

      function resetSearch() {
        searchInput.value = '';
        const activeSection = customerBtn.classList.contains('active') ? customerFaqs : hostFaqs;
        
        activeSection.querySelectorAll('.faq-item').forEach(item => {
          item.style.display = 'block';
          item.classList.remove('highlight');
          item.classList.remove('active');
          item.querySelector('.faq-answer').style.maxHeight = null;
        });
        
        const existingNoResults = activeSection.querySelector('.no-results');
        if (existingNoResults) {
          existingNoResults.remove();
        }
      }

      // Event Listeners
      searchBtn.addEventListener('click', performSearch);
      searchInput.addEventListener('keyup', (e) => {
        if (e.key === 'Enter') {
          performSearch();
        }
      });

      // Initialize the page
      initializeFAQs();
    });