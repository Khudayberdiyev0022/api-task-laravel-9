<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'title'   => 'required|string|max:255',
      'content' => 'required|string|max:1000',
      'status'  => 'required|boolean',
    ];
  }
}
