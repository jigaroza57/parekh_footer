{{-- Enhanced Category Dropdown Template --}}
<li class="dropdown-item-wrapper">
    <a class="dropdown-item-enhanced" 
       href="{{ route('frontend.product_by_category', ['id' => $category->id]) }}">
        <i class="fas fa-arrow-right item-icon"></i>
        <div class="item-content">
            <span class="item-title">{{ $category->name }}</span>
            @if($category->description)
            <span class="item-description">{{ Str::limit($category->description, 50) }}</span>
            @endif
        </div>
        @if($category->subCatRecursive && $category->subCatRecursive->count() > 0)
        <span class="item-count">{{ $category->subCatRecursive->count() }}</span>
        @endif
    </a>
    
    {{-- Nested subcategories --}}
    @if($category->subCatRecursive && $category->subCatRecursive->count() > 0)
    <ul class="nested-dropdown">
        @foreach($category->subCatRecursive as $subCategory)
        @include('frontend.enhanced_category_dropdown', ['category' => $subCategory])
        @endforeach
    </ul>
    @endif
</li>

<style>
/* Enhanced Dropdown Item Styles */
.dropdown-item-wrapper {
    position: relative;
}

.dropdown-item-enhanced {
    padding: 16px 20px;
    color: var(--text-primary, #2d3748);
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 16px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    position: relative;
    overflow: hidden;
}

.dropdown-item-enhanced::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 0;
    background: linear-gradient(135deg, #667eea, #764ba2);
    transition: width 0.3s ease;
    z-index: 1;
}

.dropdown-item-enhanced:hover::before {
    width: 4px;
}

.dropdown-item-enhanced:hover {
    background: linear-gradient(135deg, #f8f9ff, #e6f3ff);
    color: var(--text-primary, #2d3748);
    transform: translateX(8px);
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.1);
}

.item-icon {
    color: #667eea;
    font-size: 0.9rem;
    transition: all 0.3s ease;
    z-index: 2;
    position: relative;
}

.dropdown-item-enhanced:hover .item-icon {
    color: #764ba2;
    transform: translateX(4px);
}

.item-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 4px;
    z-index: 2;
    position: relative;
}

.item-title {
    font-weight: 600;
    font-size: 0.95rem;
    line-height: 1.3;
}

.item-description {
    font-size: 0.8rem;
    color: var(--text-light, #718096);
    opacity: 0.8;
}

.item-count {
    background: linear-gradient(135deg, #4facfe, #00f2fe);
    color: white;
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 600;
    min-width: 24px;
    text-align: center;
    z-index: 2;
    position: relative;
}

/* Nested Dropdown Styles */
.nested-dropdown {
    background: rgba(247, 250, 252, 0.95);
    backdrop-filter: blur(10px);
    border-left: 3px solid #667eea;
    margin: 0;
    padding: 0;
    list-style: none;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
}

.dropdown-item-wrapper:hover .nested-dropdown {
    max-height: 300px;
}

.nested-dropdown .dropdown-item-enhanced {
    padding: 12px 16px 12px 40px;
    font-size: 0.9rem;
    border-bottom: 1px solid rgba(0, 0, 0, 0.03);
}

.nested-dropdown .item-icon {
    font-size: 0.8rem;
}

.nested-dropdown .item-title {
    font-weight: 500;
}

/* Hover animations for nested items */
.nested-dropdown .dropdown-item-enhanced:hover {
    background: linear-gradient(135deg, #ffffff, #f8f9ff);
    transform: translateX(12px);
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .dropdown-item-enhanced {
        padding: 14px 16px;
        gap: 12px;
    }
    
    .item-content {
        gap: 2px;
    }
    
    .item-title {
        font-size: 0.9rem;
    }
    
    .item-description {
        font-size: 0.75rem;
    }
    
    .nested-dropdown .dropdown-item-enhanced {
        padding: 10px 12px 10px 32px;
    }
}
</style>