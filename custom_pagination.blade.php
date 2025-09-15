{{-- Custom Pagination Component --}}
{{-- File: resources/views/custom/pagination.blade.php --}}

@if ($paginator->hasPages())
<nav class="custom-pagination-wrapper" role="navigation" aria-label="Pagination Navigation">
    <div class="pagination-info">
        <span class="pagination-text">
            Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} results
        </span>
    </div>
    
    <ul class="custom-pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link prev-link">
                    <i class="fas fa-chevron-left"></i>
                    <span class="sr-only">Previous</span>
                </span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link prev-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <i class="fas fa-chevron-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
        @endif

        {{-- First Page Link --}}
        @if($paginator->currentPage() > 3)
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url(1) }}">1</a>
            </li>
            @if($paginator->currentPage() > 4)
                <li class="page-item disabled">
                    <span class="page-link dots">...</span>
                </li>
            @endif
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link dots">{{ $element }}</span>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page">
                            <span class="page-link current-page">
                                {{ $page }}
                                <div class="active-indicator"></div>
                            </span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Last Page Link --}}
        @if($paginator->currentPage() < $paginator->lastPage() - 2)
            @if($paginator->currentPage() < $paginator->lastPage() - 3)
                <li class="page-item disabled">
                    <span class="page-link dots">...</span>
                </li>
            @endif
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a>
            </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link next-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
                    <i class="fas fa-chevron-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link next-link">
                    <i class="fas fa-chevron-right"></i>
                    <span class="sr-only">Next</span>
                </span>
            </li>
        @endif
    </ul>
    
    {{-- Quick Jump --}}
    @if($paginator->lastPage() > 10)
    <div class="pagination-jump">
        <span class="jump-label">Go to page:</span>
        <input type="number" 
               class="jump-input" 
               min="1" 
               max="{{ $paginator->lastPage() }}" 
               value="{{ $paginator->currentPage() }}"
               data-base-url="{{ $paginator->url('') }}"
               placeholder="Page">
        <button class="jump-btn" type="button">
            <i class="fas fa-arrow-right"></i>
        </button>
    </div>
    @endif
</nav>

<style>
/* ===== Custom Pagination Styles ===== */
.custom-pagination-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1.5rem;
    margin-top: 3rem;
    padding: 2rem 0;
}

.pagination-info {
    text-align: center;
}

.pagination-text {
    color: var(--text-light, #666);
    font-size: 0.95rem;
    font-weight: 500;
}

.custom-pagination {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    list-style: none;
    margin: 0;
    padding: 0;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: 50px;
    padding: 0.5rem;
    box-shadow: 0 8px 30px rgba(59, 0, 0, 0.1);
    border: 1px solid rgba(253, 186, 75, 0.2);
}

.page-item {
    margin: 0;
}

.page-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    border: none;
    background: transparent;
    color: var(--primary-color, #3B0000);
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.page-link:hover {
    background: linear-gradient(135deg, var(--secondary-color, #FDBA4B), #ffcc66);
    color: var(--primary-color, #3B0000);
    transform: translateY(-2px) scale(1.05);
    box-shadow: 0 8px 25px rgba(253, 186, 75, 0.4);
}

.page-link:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(253, 186, 75, 0.3);
}

/* Active Page */
.page-item.active .page-link {
    background: linear-gradient(135deg, var(--primary-color, #3B0000), #4a0000);
    color: white;
    transform: scale(1.1);
    box-shadow: 0 8px 25px rgba(59, 0, 0, 0.3);
    position: relative;
}

.active-indicator {
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--secondary-color, #FDBA4B), #ffcc66);
    z-index: -1;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% {
        opacity: 0.7;
        transform: scale(1);
    }
    50% {
        opacity: 1;
        transform: scale(1.05);
    }
}

/* Navigation Links */
.prev-link,
.next-link {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--primary-color, #3B0000), #4a0000);
    color: white;
    font-size: 1.1rem;
}

.prev-link:hover,
.next-link:hover {
    background: linear-gradient(135deg, var(--secondary-color, #FDBA4B), #ffcc66);
    color: var(--primary-color, #3B0000);
}

/* Disabled State */
.page-item.disabled .page-link {
    color: #ccc;
    cursor: not-allowed;
    background: transparent;
}

.page-item.disabled .page-link:hover {
    background: transparent;
    transform: none;
    box-shadow: none;
}

/* Dots */
.dots {
    cursor: default;
    color: var(--text-light, #666);
    font-weight: bold;
}

.dots:hover {
    background: transparent;
    transform: none;
    box-shadow: none;
}

/* Quick Jump */
.pagination-jump {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.5rem;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    border-radius: 25px;
    box-shadow: 0 4px 15px rgba(59, 0, 0, 0.1);
    border: 1px solid rgba(253, 186, 75, 0.2);
}

.jump-label {
    color: var(--text-dark, #2c2c2c);
    font-weight: 600;
    font-size: 0.9rem;
}

.jump-input {
    width: 70px;
    padding: 0.5rem 0.75rem;
    border: 2px solid rgba(253, 186, 75, 0.3);
    border-radius: 8px;
    background: white;
    color: var(--primary-color, #3B0000);
    font-weight: 600;
    text-align: center;
    transition: all 0.3s ease;
}

.jump-input:focus {
    outline: none;
    border-color: var(--secondary-color, #FDBA4B);
    box-shadow: 0 0 0 3px rgba(253, 186, 75, 0.2);
}

.jump-btn {
    width: 35px;
    height: 35px;
    border: none;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--secondary-color, #FDBA4B), #ffcc66);
    color: var(--primary-color, #3B0000);
    font-size: 0.9rem;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.jump-btn:hover {
    background: linear-gradient(135deg, var(--primary-color, #3B0000), #4a0000);
    color: white;
    transform: scale(1.1);
}

/* Screen Reader Only */
.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}

/* ===== Responsive Design ===== */
@media (max-width: 768px) {
    .custom-pagination-wrapper {
        gap: 1rem;
        margin-top: 2rem;
    }
    
    .custom-pagination {
        gap: 0.25rem;
        padding: 0.25rem;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .page-link {
        width: 40px;
        height: 40px;
        font-size: 0.9rem;
    }
    
    .prev-link,
    .next-link {
        width: 45px;
        height: 45px;
    }
    
    .pagination-jump {
        flex-direction: column;
        gap: 0.5rem;
        padding: 1rem;
    }
    
    .jump-input {
        width: 80px;
    }
}

@media (max-width: 480px) {
    .pagination-info {
        font-size: 0.85rem;
    }
    
    .custom-pagination {
        padding: 0.25rem;
        border-radius: 25px;
    }
    
    .page-link {
        width: 35px;
        height: 35px;
        font-size: 0.85rem;
    }
    
    .prev-link,
    .next-link {
        width: 40px;
        height: 40px;
    }
    
    /* Hide some page numbers on very small screens */
    .custom-pagination .page-item:not(.active):not(:first-child):not(:last-child):not(:nth-last-child(2)):not(:nth-child(2)) {
        display: none;
    }
}

/* ===== Animation Enhancements ===== */
.page-link::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: radial-gradient(circle, rgba(253, 186, 75, 0.3) 0%, transparent 70%);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: all 0.3s ease;
    z-index: -1;
}

.page-link:hover::before {
    width: 60px;
    height: 60px;
}

/* Loading state for pagination */
.pagination-loading {
    opacity: 0.6;
    pointer-events: none;
    position: relative;
}

.pagination-loading::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 20px;
    height: 20px;
    margin: -10px 0 0 -10px;
    border: 2px solid var(--secondary-color, #FDBA4B);
    border-top: 2px solid transparent;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Quick jump functionality
    const jumpInput = document.querySelector('.jump-input');
    const jumpBtn = document.querySelector('.jump-btn');
    
    if (jumpInput && jumpBtn) {
        function handleJump() {
            const pageNumber = parseInt(jumpInput.value);
            const baseUrl = jumpInput.dataset.baseUrl;
            const maxPage = parseInt(jumpInput.max);
            
            if (pageNumber >= 1 && pageNumber <= maxPage && baseUrl) {
                // Add loading state
                jumpBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
                jumpBtn.disabled = true;
                
                // Navigate to the page
                window.location.href = baseUrl.replace(/\/$/, '') + '?page=' + pageNumber;
            } else {
                // Show error animation
                jumpInput.style.borderColor = '#e74c3c';
                jumpInput.style.animation = 'shake 0.5s ease';
                
                setTimeout(() => {
                    jumpInput.style.borderColor = '';
                    jumpInput.style.animation = '';
                }, 500);
            }
        }
        
        jumpBtn.addEventListener('click', handleJump);
        
        jumpInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                handleJump();
            }
        });
        
        // Input validation
        jumpInput.addEventListener('input', function() {
            const value = parseInt(this.value);
            const max = parseInt(this.max);
            
            if (value > max) {
                this.value = max;
            } else if (value < 1) {
                this.value = 1;
            }
        });
    }
    
    // Add smooth scroll to top when changing pages
    const pageLinks = document.querySelectorAll('.page-link:not(.dots)');
    pageLinks.forEach(link => {
        if (link.href) {
            link.addEventListener('click', function(e) {
                // Add loading state to clicked link
                const originalContent = this.innerHTML;
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
                this.style.pointerEvents = 'none';
                
                // Restore content if navigation is cancelled
                setTimeout(() => {
                    if (this.innerHTML.includes('fa-spinner')) {
                        this.innerHTML = originalContent;
                        this.style.pointerEvents = '';
                    }
                }, 3000);
            });
        }
    });
    
    // Add intersection observer for pagination animation
    const paginationWrapper = document.querySelector('.custom-pagination-wrapper');
    if (paginationWrapper) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '0';
                    entry.target.style.transform = 'translateY(20px)';
                    entry.target.style.transition = 'all 0.6s ease';
                    
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 100);
                    
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        observer.observe(paginationWrapper);
    }
});

// Add shake animation for error states
if (!document.querySelector('#shake-keyframes')) {
    const style = document.createElement('style');
    style.id = 'shake-keyframes';
    style.textContent = `
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-2px); }
            20%, 40%, 60%, 80% { transform: translateX(2px); }
        }
    `;
    document.head.appendChild(style);
}
</script>
@endif