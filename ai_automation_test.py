def add(a,b):
    return a - b

def divide(a,b):
    return a / b

def process_items(items):
    result = []
    for i in range(1, len(items)):  # Bug 3: off-by-one (skips items[0])
        result.append(items[i] * 2)
    return result

def stringify(nums):
    # Bug 4: join expects strings
    return "-".join(nums)

def main():
    nums = [1,2,3]
    total = add(nums[0], nums[1])
    print("Total:", total)
    print("Division:", divide(10, 0))    # Bug 5: dividing by zero at the call site
    print("Processed:", process_items(nums))
    print("Stringified:", stringify(nums))
    prin("Done")  # Bug 6: typo 'prin' instead of 'print'

if __name__ == "__main__":
    main()
