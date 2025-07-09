
// Year Picker Functionality
document.addEventListener('DOMContentLoaded', function() {
    const yearInput = document.getElementById('vehicleYear');
    const yearPicker = document.getElementById('yearPicker');
    const currentYear = new Date().getFullYear();
    const minYear = 1950;
    const maxYear = currentYear;
    
    yearInput.addEventListener('focus', function() {
        generateYearPicker(currentYear);
        yearPicker.classList.remove('d-none');
    });
    
    document.addEventListener('click', function(e) {
        if (e.target !== yearInput && !yearPicker.contains(e.target)) {
            yearPicker.classList.add('d-none');
        }
    });
    
    function generateYearPicker(centerYear) {
        // Adjust center year if it would show out-of-range years
        if (centerYear - 6 < minYear) {
            centerYear = minYear + 6;
        }
        if (centerYear + 5 > maxYear) {
            centerYear = maxYear - 5;
        }
        
        yearPicker.innerHTML = '';
        
        const header = document.createElement('div');
        header.className = 'yearpicker-header';
        
        const prevBtn = document.createElement('button');
        prevBtn.className = 'yearpicker-prev';
        prevBtn.innerHTML = '&lt;';
        prevBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            const newCenter = centerYear - 12;
            generateYearPicker(newCenter >= minYear + 6 ? newCenter : minYear + 6);
        });
        
        // Disable prev button if we're at the minimum range
        if (centerYear - 6 <= minYear) {
            prevBtn.disabled = true;
            prevBtn.style.opacity = '0.5';
            prevBtn.style.cursor = 'not-allowed';
        }
        
        const nextBtn = document.createElement('button');
        nextBtn.className = 'yearpicker-next';
        nextBtn.innerHTML = '&gt;';
        nextBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            const newCenter = centerYear + 12;
            generateYearPicker(newCenter <= maxYear - 5 ? newCenter : maxYear - 5);
        });
        
        // Disable next button if we're at the maximum range
        if (centerYear + 5 >= maxYear) {
            nextBtn.disabled = true;
            nextBtn.style.opacity = '0.5';
            nextBtn.style.cursor = 'not-allowed';
        }
        
        const title = document.createElement('div');
        title.textContent = `${Math.max(centerYear - 6, minYear)} - ${Math.min(centerYear + 5, maxYear)}`;
        
        header.appendChild(prevBtn);
        header.appendChild(title);
        header.appendChild(nextBtn);
        yearPicker.appendChild(header);
        
        const startYear = Math.max(centerYear - 6, minYear);
        const endYear = Math.min(centerYear + 5, maxYear);
        
        for (let year = startYear; year <= endYear; year++) {
            const yearElement = document.createElement('div');
            yearElement.className = 'yearpicker-year';
            yearElement.textContent = year;
            
            if (yearInput.value == year) {
                yearElement.classList.add('selected');
            }
            
            yearElement.addEventListener('click', function(e) {
                e.stopPropagation();
                yearInput.value = year;
                yearPicker.classList.add('d-none');
                document.querySelectorAll('.yearpicker-year').forEach(el => {
                    el.classList.remove('selected');
                });
                this.classList.add('selected');
            });
            
            yearPicker.appendChild(yearElement);
        }
    }
    
    // Add validation to ensure entered year is within range
    yearInput.addEventListener('blur', function() {
        if (yearInput.value) {
            const enteredYear = parseInt(yearInput.value);
            if (isNaN(enteredYear)) {
                yearInput.value = '';
                return;
            }
            
            if (enteredYear < minYear || enteredYear > maxYear) {
                alert(`Please enter a year between ${minYear} and ${maxYear}`);
                yearInput.value = '';
            }
        }
    });
});
