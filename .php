<?php
def merge_arrays(arr1, arr2):
    """Объединяет два массива в один"""
    # Проверяем, являются ли arr1 и arr2 списками
    if not isinstance(arr1, list) or not isinstance(arr2, list):
        raise TypeError("Аргументы должны быть списками")

    # Объединяем массивы
    arr1.extend(arr2)
?>