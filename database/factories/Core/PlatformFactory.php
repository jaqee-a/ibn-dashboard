<?php

namespace Database\Factories\Core;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PlatformFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $company_name = fake()->company();
        $company_name_rep = str_replace(' ', '', strtolower($company_name));
        return [
            'name' => fake()->company(),
            'domain' => 'https://www.' . $company_name_rep . '.com',
            'active' => true,
            'plan_id' => 1,
            'support_email' => $company_name_rep . '@support.com',
            'contact_email' => $company_name_rep . '@contact.com',
            'sent_email' => $company_name_rep . '@sent.com',
            'logo_image_id' => 1
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unactive()
    {
        return $this->state(fn (array $attributes) => [
            'active' => false,
        ]);
    }
}
