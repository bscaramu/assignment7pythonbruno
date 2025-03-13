import sys

def validate_input(input_str):
    try:
        return [int(num) for num in input_str.split(',')]
    except ValueError:
        raise ValueError("Input must be a series of integers separated by commas.")

def bitwise_operations(numbers):
    bitwise_and = numbers[0]
    bitwise_or = numbers[0]
    bitwise_xor = numbers[0]
    for number in numbers[1:]:
        bitwise_and &= number
        bitwise_or |= number
        bitwise_xor ^= number
    return bitwise_and, bitwise_or, bitwise_xor

def filter_greater_than_threshold(numbers, threshold):
    return [num for num in numbers if num > threshold]

if __name__ == "__main__":
    input_str = sys.argv[1]
    threshold = int(sys.argv[2])

    try:
        numbers = validate_input(input_str)
    except ValueError as e:
        print(str(e))
        sys.exit(1)

    bitwise_and, bitwise_or, bitwise_xor = bitwise_operations(numbers)
    filtered_numbers = filter_greater_than_threshold(numbers, threshold)

    print(f"Bitwise AND: {bitwise_and}")
    print(f"Bitwise OR: {bitwise_or}")
    print(f"Bitwise XOR: {bitwise_xor}")
    print(f"Numbers greater than threshold: {filtered_numbers}")